<?php

namespace App\Http\Controllers\ManagerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Department;
//use App\Helpers\Helper;

class EmployeeController extends Controller
{
    public function ManagerEmp() {

        $data = User::all();
        return view('managerr.manager_emp', compact('data'));
    }

    public function ManagerEmpReg() {

        return view('managerr.manager_empreg');
    }

    public function ManagerEmpCreate(Request $request) {

            //Adding Image
            $filename = time() . "." . $request->image->extension();
            $request->image->move(public_path('assets/uploads'), $filename);

            //Adding Other Details
        User::create([
            'name'=> $request->name,
            'empId'=> $request->id,
            'address'=> $request->address,
            'propic'=> $filename,
            'nic'=> $request->nic,
            'age'=> $request->age,
            'civil'=> $request->civil,
            'gender'=> $request->gender,
            'mobile'=> $request->number,
            'position'=> $request->position,
            'workstatus'=> 0,
            'qualification'=> $request->qualification,
            'worktype'=> $request->worktype,
            'emname'=> $request->emname,
            'emcontact'=> $request->emcontact,
            'email'=> $request->email,
            'password'=> bcrypt($request->password)

        ]);

        return back()->with('status',"New Employee Register Success");
    }

    public function ManagerDepReg() {

        $dep = Department::all();
        return view('managerr.manager_depreg', compact('dep'));
    }

    public function ManagerDepCreate(Request $request) {

        Department::create([
            'depId'=> $request->depid,
            'depName'=> $request->name,
            'empcount'=> 0
        ]);

        return back()->with('status',"New Department Adding Success");
    }

    public function ManagerDeleteDep($Id) {

        $dep = Department::find($Id);
        //Image Delete Required!!!
        $dep->delete();
        return back()->with('status',"Department delete is Success");
    }

    public function ManagerViewEmp($Id) {

        $view = User::where('id',$Id)->get();
        return view('managerr.manager_profileview', compact('view'));
    }

    public function ManagerDeleteEmp($Id) {

        $emps = User::find($Id);
        //Image Delete Required!!!
        $emps->delete();
        return back()->with('status',"Employee delete is Success");
    }

    public function ManagerUpdateEmp($Id) {

        $employees = User::find($Id);
        return view('managerr.manager_empupdate', compact('employees'));
    }

    public function ManagerUpdateEmpDone(Request $request,$Id) {

        $employee = User::find($Id);

        //Image Updating
       if($request->hasfile('image'))
       {
         $filename = time() . "." . $request->image->extension();
         $request->image->move(public_path('assets/uploads'), $filename);
         $employee->propic = $filename;
       }
       else
       {
        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->age = $request->age;
        $employee->nic = $request->nic;
        $employee->gender = $request->gender;
        $employee->civil = $request->civil;
        $employee->mobile = $request->number;
        $employee->position = $request->position;
        $employee->qualification = $request->qualification;
        $employee->worktype = $request->worktype;
        $employee->emname = $request->emname;
        $employee->emcontact = $request->emcontact;
        $employee->email = $request->email;
        $employee->save();
       }

        return redirect(route('manager.emp'))->with('status',"Employee Update Success");
    }
}
