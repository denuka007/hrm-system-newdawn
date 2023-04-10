<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\AttendanceLog;
use App\Models\AttendanceMemory;
use App\Models\AbsantMemory;
use App\Models\WorkHoursOT;
use App\Models\OtMemory;

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
        ->whereMonth('created_at', $Month)
        ->sum('present');

        $absantdates = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $Month)
        ->sum('absant');

        //Calculate present presentage
        $present = $presentdates / 26 * 100;
        $pre = (integer)$present;

        //Calculate present presentage
        $absant = $absantdates / 4 * 100;
        $ab = (integer)$absant;

        $status = '';

        //getting status
        if($pre == 100)
        {
            $status = 'Excellent';
        }
        elseif($pre >= 75)
        {
            $status = 'Good';
        }
        elseif($pre >= 50)
        {
            $status = 'Normal';
        }
        elseif($pre >= 25)
        {
            $status = 'Poor';
        }

        $attenlog = AttendanceMemory::where('empId',$Id)
        ->whereMonth('created_at', $Month)
        ->get();

        $absantlog = AbsantMemory::where('empId',$Id)
        ->whereMonth('created_at', $Month)
        ->get();


        return view('adminn.admin_attenview', compact('attenlog','absantlog','pre','ab','status'));

    }

    public function PerfomanceOvertime($Id) {

        $empid = $Id;
        return view('adminn.admin_monthovertime', compact('empid'));
    }

    public function OvertimeGet($Id, $Month) {

        $othours = WorkHoursOT::where('empId',$Id)
        ->whereMonth('created_at', $Month)
        ->sum('othours');

        //getting presentage


        $otlog = OtMemory::where('empId',$Id)
        ->whereMonth('created_at', $Month)
        ->get();

        return view('adminn.admin_otview', compact('otlog', 'othours'));
    }
}
