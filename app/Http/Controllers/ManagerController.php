<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manager;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Auth;
use DB;

class ManagerController extends Controller
{
    public function Index() {

        return view('managerr.manager_login');
    }

    public function ManagerDashboard() {

        return view('managerr.managerdash');
    }

    public function ManagerLogin(Request $request) {

        $check = $request->all();

        if(Auth::guard('manager')->attempt(['email' => $check['email'], 'password' => $check['password']])) {

            return redirect()->route('manager.dashboard')->with('msg', 'Manager Login is Success!!');
        }
        else{

            return back()->with('error', 'Invaild Email or Password');
        }
    }

    public function ManagerLogout() {
        Auth::guard('manager')->logout();
        return redirect()->route('manager_login_from')->with('error', 'Manager Logout is Success!!');
    }

    // public function ManagerRegister() {
    //     return view('managerr.manager_register');
    // }

    // public function ManagerRegisterCreate(Request $request) {

    //     Manager::insert([

    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'created_at' => Carbon::now()
    //     ]);

    //     return redirect()->route('manager_login_from')->with('error', 'Manager Registration is Success!!');

    // }


}
