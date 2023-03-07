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
        return view('managerr.manager_depreg');
    }

    public function ManagerDepCreate(Request $request) {

        Department::create([
            'depId'=> $request->depid,
            'depName'=> $request->name
        ]);

        return back()->with('status',"New Department Adding Success");
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

        return view('managerr.manager_empupdate');
    }
}