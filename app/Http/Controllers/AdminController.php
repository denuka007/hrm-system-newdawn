<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function Index() {
        return view('adminn.admin_login');
    }

    public function Dashboard() {
        return view('adminn.admindash');
    }

    public function Login(Request $request) {

        $check = $request->all();

        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {

            return redirect()->route('admin.dashboard')->with('msg', 'Admin Login is Success!!');
        }
        else{

            return back()->with('error', 'Invaild Email or Password');
        }
    }

    public function AdminLogout() {
        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('error', 'Admin Logout is Success!!');
    }

    // public function AdminRegister() {
    //     return view('adminn.admin_register');
    // }

    // public function AdminRegisterCreate(Request $request) {

    //     Admin::insert([

    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'created_at' => Carbon::now()
    //     ]);

    //     return redirect()->route('login_from')->with('error', 'Admin Registration is Success!!');

    // }

    public function AdminProfile() {
        return view('adminn.admin_profile');
    }
}
