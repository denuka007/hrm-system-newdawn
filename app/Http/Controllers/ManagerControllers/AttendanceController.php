<?php

namespace App\Http\Controllers\ManagerControllers;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Department;
use App\Models\Attendance;
use App\Models\AttendanceLog;
use App\Models\Absant;
use App\Models\AbsantMemory;
use App\Models\AttendanceMemory;
use App\Models\Leaves;
use App\Models\WorkHoursNormal;
use App\Models\EmpInbox;
use App\Models\ShortLeave;
use Barryvdh\DomPDF\Facade\Pdf;

class AttendanceController extends Controller
{
    public function AttendanceView() {

        $data = User::all();
        return view('managerr.manager_attendance', compact('data'));
    }

    public function AttendanceMark(Request $request, $Id) {

        //checking if data available or not
        if(Attendance::where('empId', $Id)->exists())
        {
            return back()->with('error',"Already Mark the Attendance");
        }
        else
        {
         //define current time
        $nowtime = carbon::now()->toTimeString();
        $nowdate = carbon::now()->toDateString();
        //define late time
        $latetime = carbon::create(2022, 8, 24, 8)->toTimeString();

         //define DB
         $attendance = new Attendance();
         $attendanceLog = new AttendanceLog();
         $attendanceMemory = new AttendanceMemory();

         //get data according to EmpId
         $emp =User::where('empId',$Id)->get();
         foreach($emp as $emps)
         $empname = $emps->name;
         $empId = $emps->empId;

         //insert data into DB
         $attendance->empId = $empId;
         $attendance->name = $empname;
         $attendance->arrivetime = $nowtime;
         $attendance->save();

         $attendanceMemory->empId = $empId;
         $attendanceMemory->name = $empname;
         $attendanceMemory->arrivetime = $nowtime;
         $attendanceMemory->present_date = $nowdate;
         $attendanceMemory->save();

         $attendanceLog->emp_Id = $empId;
         $attendanceLog->save();

         if($nowtime < $latetime )
         {
            $attendance->status = 1; //Ontime
            $attendance->save();
         }
         else
         {
            $attendance->status = 0; //LateComming
            $attendance->save();
         }


         $attendanceDetail =AttendanceLog::where('emp_Id',$Id)->get();
         foreach($attendanceDetail as $attendanceDetails)
         $presentCount = $attendanceDetails->present;
         $presentCount++;
         $attendanceLog->present = $presentCount;
         $attendanceLog->save();

        return back()->with('status',"Attendent Mark Success");

  }

    }

    public function AttendanceAbsantMark(Request $request, $Id) {

        if(Attendance::where('empId', $Id)->exists())
        {
            return back()->with('error',"Already Employee mark as Present");
        }
        else
        {

         //define absant date
         $absantdate = carbon::now()->toDateString();

         //define database
         $absant = new Absant();
         $attendanceLogs = new AttendanceLog();
         $absantMemo = new AbsantMemory();

         //getting data according to Id
         $emps =User::where('empId',$Id)->get();
          foreach($emps as $emps)
          $empname = $emps->name;
          $empId = $emps->empId;

          //enter data to database
          $absant->emp_Id = $empId;
          $absant->name = $empname;
          $absant->absant_date = $absantdate;
          $absant->save();

          $absantMemo->empid = $empId;
          $absantMemo->abname = $empname;
          $absantMemo->absantdate = $absantdate;
          $absantMemo->save();

          $attendanceLogs->emp_Id = $empId;
          $attendanceLogs->save();

          //enter data to attendanceLog
          $attendanceDetails = AttendanceLog::where('emp_Id',$Id)->get();
          foreach($attendanceDetails as $attendanceDetails)
          $absantCount = $attendanceDetails->absant;
          $absantCount++;
          $attendanceLogs->absant = $absantCount;
          $attendanceLogs->save();

         return back()->with('status',"Absant Mark Success");
        }

     }

     public function AttendanceEmps() {

        $attendanceData = Attendance::all();
        return view('managerr.manager_attendanceview', compact('attendanceData'));
     }

     public function AttendancePDF() {

        $att = Attendance::all();
        $pdf = Pdf::loadView('managerr.pdf.attendance',['att'=>$att]);
        return $pdf->download('attendance.pdf');
     }

     public function AbsantView() {

        $ab = Absant::all();
        return view('managerr.manager_absant', compact('ab'));
     }

     public function AttendanceOff($Id) {

        //define work hours
        $offtime = carbon::now()->toTimeString();
        $arrivetime = DB::table('attendances')
             ->where('empId', $Id)
             ->get();

        foreach($arrivetime as $arr)
        $arrtime = $arr->arrivetime;
        $one = (double)$arrtime;
        $two = (double)$offtime;
        $result = $two - $one;

        //define date
        $date = carbon::now()->toDateString();

        //enter data to db
        $workhours = new WorkHoursNormal();
        $workhours->empId = $Id;
        $workhours->workhours = $result;
        $workhours->date = $date;
        $workhours->save();

        DB::table('attendances')->where('empId', $Id)->delete();
        return back()->with('status',"Employee Off From Work");
     }

     public function LeavesView() {

        $sleave = ShortLeave::all();
        $leaves = Leaves::all();
        return view('managerr.manager_leaves', compact('leaves', 'sleave'));
     }

     public function LeavesAccept($Id) {

        $emp = Leaves::where('id',$Id)->get();
        foreach($emp as $emps)
        $empid = $emps->empId;

        $leavestate = Leaves::find($Id);
        $leavestate->increment('status', 1);

        $msg = new EmpInbox();
        $msg->empId = $empid;
        $msg->msg = 'Your Leave is Accepted By Manager';
        $msg->type = 2;
        $msg->save();

        $atlog = new AttendanceLog();
        $atlog->emp_Id = $empid;
        $atlog->leaves = 1;
        $atlog->save();

        return back()->with('status',"Employee Leave is Accepted");
     }

     public function LeavesReject($Id) {

        $emp = Leaves::where('id',$Id)->get();
        foreach($emp as $emps)
        $empid = $emps->empId;

        $leavestate = Leaves::find($Id);
        $leavestate->decrement('status', 1);

        $msg = new EmpInbox();
        $msg->empId = $empid;
        $msg->msg = 'Your Leave is Rejected By Manager';
        $msg->type = 1;
        $msg->save();

        return back()->with('status',"Employee Leave is Rejected");
     }

     public function ShortLeavesAccept($Id) {

        $emp = ShortLeave::where('id',$Id)->get();
        foreach($emp as $emps)
        $empid = $emps->empId;

        $findsleave = ShortLeave::find($Id);
        $findsleave->delete();

        $msg = new EmpInbox();
        $msg->empId = $empid;
        $msg->msg = 'Your ShortLeave is Accepted';
        $msg->type = 2;
        $msg->save();

        return back()->with('status',"Employee ShortLeave is Accepted");
     }

     public function ShortLeavesReject($Id) {

        $emp = ShortLeave::where('id',$Id)->get();
        foreach($emp as $emps)
        $empid = $emps->empId;

        $findsleave = ShortLeave::find($Id);
        $findsleave->delete();

        $msg = new EmpInbox();
        $msg->empId = $empid;
        $msg->msg = 'Your ShortLeave is Rejected By Administration';
        $msg->type = 1;
        $msg->save();

        return back()->with('status',"Employee ShortLeave is Rejected");
     }

}
