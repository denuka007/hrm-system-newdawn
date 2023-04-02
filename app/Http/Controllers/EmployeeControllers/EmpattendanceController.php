<?php

namespace App\Http\Controllers\EmployeeControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Attendance;
use App\Models\AttendanceLog;
use App\Models\Absant;
use App\Models\AbsantMemory;
use App\Models\ShortLeave;
use App\Models\AttendanceMemory;
use App\Models\Leaves;

class EmpattendanceController extends Controller
{
    public function AttendanceView() {

        $total = AttendanceLog::where('emp_Id',Auth::user()->empId)->sum('present'); //get sum of present dates
        $state = Attendance::where('empId',Auth::user()->empId)->get(); //get attendance state
        $attmemo = AttendanceMemory::where('empId',Auth::user()->empId)->take(5)->get(); //get attendanceMemory data
        $leaves = Leaves::where('empId',Auth::user()->empId)->get();
        return view('employee.emp_attendance', compact('attmemo', 'state', 'leaves'));
    }

    public function LeaveRequest(Request $request, $Id) {

        $empID = $Id;
        $leavecount = AttendanceLog::where('emp_Id',Auth::user()->empId)->sum('leaves');

        if($leavecount >= 4)
        {
            return back()->with('error', 'Your this month leaveCount is Over');
        }
        else
        {
            $leave = new Leaves();
            $leave->empId = $empID;
            $leave->name = $request->name;
            $leave->reason = $request->reason;
            $leave->leavedate = $request->date;
            $leave->save();

            return back()->with('status', 'Your Leave Request is Send to Manager');
        }

    }

    public function ShortLeave($Id) {

        $check = Attendance::where('empId', $Id)->exists();
        if(Attendance::where('empId', $Id)->exists())
        {
            $sleave = new ShortLeave();
            $sleave->empId = $Id;
            $sleave->name = Auth::user()->name;
            $sleave->date = carbon::now()->toDateString();
            $sleave->save();

            return back()->with('status', 'Your ShortLeave Request is Send to Manager');
        }
        else
        {
            return back()->with('error', 'Your Not Mark as Attended Today!');
        }
    }

    public function ClearLeave($Id) {

        $leaveclear = Leaves::find($Id);
        $leaveclear->delete();

        return back()->with('status', 'Your Leave Request Delete Success');
    }
}
