<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfomanceController extends Controller
{
    public function PerfomanceView() {

        return view('adminn.admin_perfomance');
    }

    public function PerfomanceIndividual() {

        $emps = User::all();
        return view('adminn.admin_indiperfomance', compact('emps'));
    }

    public function PerfomanceCompare() {

        $emps = User::all();
        return view('adminn.admin_compareper', compact('emps'));
    }

    public function PerfomanceAttendance($Id) {

        $empid = $Id;
        return view('adminn.admin_monthatten', compact('empid'));
    }

    public function AttendanceGet($Id, $Month) {

        $presentdates = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', Carbon::now()->month)
        ->sum('present');
    }
}
