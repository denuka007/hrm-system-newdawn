<?php

namespace App\Http\Controllers\ManagerControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Department;

class WorkforceController extends Controller
{
    public function AttendanceView() {

        return view('managerr.manager_workforce');
    }

    public function ShiftView() {

        return view('managerr.manager_shift');
    }
}
