<?php

namespace App\Http\Controllers\ManagerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Department;
use App\Models\Shift;
use App\Models\ShiftAssign;
use App\Models\DepartmentAssign;
use App\Models\Overtime;
use App\Models\WorkHoursOT;
use App\Models\OtMemory;

class OverTimeController extends Controller
{
    public function OverTimeView() {

        $ot = Overtime::all();
        return view('managerr.manager_overtime', compact('ot'));
    }

    public function OverTimeAssign() {

        $shift = Shift::all();
        $department = Department::all();
        $employee = User::all();
        return view('managerr.manager_overtimeassign', compact('employee','shift','department'));
    }

    public function OverTimeAssignDone(Request $request,$Id) {

        //get date and time
        $time = carbon::now()->toTimeString();
        $date = carbon::now()->toDateString();

        $empdata = User::where('empId',$Id)->get();
        foreach($empdata as $emps)
        $empid = $emps->empId;
        $name = $emps->name;
        $pos = $emps->position;

        //insert data
        $overtime = new Overtime();
        $overtime->empId = $empid;
        $overtime->name = $name;
        $overtime->position = $pos;
        $overtime->department = $request->depid;
        $overtime->shiftId = $request->shiftid;
        $overtime->starttime = $time;
        $overtime->Otdate = $date;
        $overtime->status = 1;
        $overtime->save();

        $otmemoey = new OtMemory();
        $otmemoey->empId = $empid;
        $otmemoey->name = $name;
        $otmemoey->position = $pos;
        $otmemoey->department = $request->depid;
        $otmemoey->shiftId = $request->shiftid;
        $otmemoey->Otdate = $date;
        $otmemoey->save();

        return back()->with('status',"Employee Overtime is schedule");
    }

    public function OverTimeResign($Id) {

        $otdata = Overtime::where('empId',$Id)->get();
        foreach($otdata as $data)
        $otdate = $data->Otdate;
        $otstart = $data->starttime;

        $nowtime = carbon::now()->toTimeString();
        $st = (double)$otstart;
        $now = (double)$nowtime;
        $oth = $st - $now;

        $othours = new WorkHoursOT();
        $othours->empId = $Id;
        $othours->othours = $oth;
        $othours->otdate = $otdate;
        $othours->save();

        DB::table('overtimes')->where('empId', $Id)->delete();

        return back()->with('status',"Employee Off from OT");
    }

    public function OverTimeInfo() {

        $emp = User::all();
        return view('managerr.manager_OTinfo', compact('emp'));
    }
}
