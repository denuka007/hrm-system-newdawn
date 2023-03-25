<?php

namespace App\Http\Controllers\ManagerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Department;
use App\Models\Shift;
use App\Models\ShiftAssign;
use App\Models\DepartmentAssign;

class WorkforceController extends Controller
{
    public function AttendanceView() {

        return view('managerr.manager_workforce');
    }

    public function ShiftView() {

        $all = Shift::all();
        return view('managerr.manager_shift', compact('all'));
    }

    public function ManagerShiftReg(Request $request) {

        $shift = new Shift();

        $shift->shift_Id = $request->input('shiftId');
        $shift->start_time = $request->input('stime');
        $shift->end_time = $request->input('etime');
        $shift->status = $request->input('status');
        $shift->save();

        return back()->with('status',"New Shift Adding Success");
    }

    public function ManagerShiftEdit($Id) {

        $shifts = Shift::find($Id);
        return view('managerr.manager_shiftedit', compact('shifts'));
    }

    public function ManagerUpdateShift(Request $request,$Id) {

        $shift = Shift::find($Id);

        $shift->shift_Id = $request->shiftId;
        $shift->start_time = $request->stime;
        $shift->end_time = $request->etime;
        $shift->status = $request->status;
        $shift->save();

        return back()->with('status',"Shift Update Success");
       }

       public function ManagerDeleteShift($Id) {

        $shift = Shift::find($Id);
        $shift->delete();
        return back()->with('status',"Shift delete is Success");
    }

    //Department Management
    public function DepartmentManage() {

        $dep = Department::all();
        return view('managerr.manager_depmanage', compact('dep'));
    }

    public function DepartmentActive($Id) {

        $deps = Department::find($Id);
        $deps->status = 'Active';
        $deps->save();

        return back()->with('status',"Department is Activated");
    }

    public function DepartmentShutdown($Id) {

        $deps = Department::find($Id);
        $deps->status = 'Shutdown';
        $deps->save();

        return back()->with('status',"Department is Shutdown");
    }

    public function EmployeeAssignView() {

        $emp = User::all();
        return view('managerr.manager_empassign', compact('emp'));
    }

    public function EmployeeAssignBoth($Id) {

        $employee = User::where('id',$Id)->get();
        $shift = Shift::all();
        $department = Department::all();
        return view('managerr.manager_assignforboth', compact('employee','shift','department'));
    }

    public function ManagerAssignEmp(Request $request,$Id) {

        //get Employee ID, Department ID and Shift ID
        $empId = User::where('id',$Id)->get();
        foreach($empId as $emp)
        $eid = $emp->empId;
        $depId = $request->depid;
        $shitId = $request->shiftid;

        //db define
        $depAssign = new DepartmentAssign();
        $shiftAssign = new ShiftAssign();

        $depAssign->depId = $depId;
        $depAssign->emp_Id = $eid;
        $depAssign->save();

        $shiftAssign->shift_Id = $shitId;
        $shiftAssign->emp_Id = $eid;
        $shiftAssign->save();

        $empstate = User::find($Id);
        $empstate->increment('workstatus', 1);

        return back()->with('status',"Employee Assign for Work");


    }

    public function EmployeeResign($Id) {

        DB::table('shift_assigns')->where('emp_Id', $Id)->delete();
        DB::table('department_assigns')->where('emp_Id', $Id)->delete();
        DB::table('users')->where('empId', $Id)->decrement('workstatus', 1);

        return back()->with('status',"Employee Resign From Work");
    }

}
