<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminEmployeeController extends Controller
{
    public function EmpView() {

        $data = User::all();
        return view('adminn.admin_employee', compact('data'));
    }
}
