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
use App\Models\Productivity;
use App\Models\Presentages;
use App\Models\Salery;
use App\Models\Points;
use App\Models\PointHistory;
use App\Models\Task;


class LoyaltyPointController extends Controller
{
    public function LoyalPointView() {

        return view('adminn.loyaltypoint.admin_loyal');
    }

    public function LoyalPointManage() {

        $now = Carbon::now(); //Carbon::now() ->this code here
        $start = Carbon::now()->startOfMonth();

        if($now == $start)
        {
            $emps = User::all();
            return view('adminn.loyaltypoint.admin_pointsmanage',compact('emps'));
        }
        else
        {
            return back()->with('error','This is not Start of Month');
        }
    }

    public function LoyalPointAssign($Id) {

        $date = Carbon::now();
        $previous =  $date->subMonth()->format('m');

        //absant count
        $absants = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $previous)
        ->sum('absant');

        //present presentage
        $present = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $previous)
        ->sum('present');

        //get emp name
        $userdt = User::where('empId', $Id)->get();
        foreach($userdt as $userdt)
        $name = $userdt->name;

        $pre = $present / 26 * 100;
        $pre01 = (integer)$pre;

        $noabsant = 0;
        $noabsantstatus = '';
        $attenage = 0;
        $attenagestatus = '';

        //checking noabsant and adding points
        if($absants == 0)
        {
            $noabsant = 3;
            $noabsantstatus = 'No absant points added';
        }
        else
        {
            $noabsant = 0;
            $noabsantstatus = 'No absant points unavailable';
        }

        //checking attendance and adding points
        if($pre01 >= 75)
        {
            $attenage = 3;
            $attenagestatus = 'Attendance Point Added';
        }
        elseif($pre01 >= 50)
        {
            $attenage = 1;
            $attenagestatus = 'Attendance Point Added';
        }
        else
        {
            $attenage = 0;
            $attenagestatus = 'Attendance Point unavailable';
        }

        $pointhis = new PointHistory();

        $pointhis->empId = $Id;
        $pointhis->name = $name;
        $pointhis->month = Carbon::now()->toDateString();
        $pointhis->date = Carbon::now()->toDateString();
        $pointhis->staradd = $noabsant;
        $pointhis->reason = $noabsantstatus;
        $pointhis->save();

        $pointhis01 = new PointHistory();

        $pointhis01->empId = $Id;
        $pointhis01->name = $name;
        $pointhis01->month = Carbon::now()->toDateString();
        $pointhis01->date = Carbon::now()->toDateString();
        $pointhis01->staradd = $attenage;
        $pointhis01->reason = $attenagestatus;
        $pointhis01->save();

        if(Points::where('empId', $Id)->exists())
        {
            $pointst = Points::find($Id);
            $pointst->increment('starcount', $noabsant + $attenage);
        }
        else //run only firsttime
        {
           $points = new Points();

           $points->empId = $Id;
           $points->name = $name;
           $points->starcount = $noabsant + $attenage;
           $points->save();
        }

        $history = PointHistory::where('empId', $Id)->get();
        return view('adminn.loyaltypoint.admin_pointassign', compact('history'));
    }

    public function TaskView() {

        $tsk = Task::all();
        return view('adminn.loyaltypoint.admin_taskadd', compact('tsk'));
    }

    public function TaskAdd(Request $request) {

        $task = new Task();

        $task->taskId = $request->id;
        $task->task = $request->task;
        $task->star = $request->star;
        $task->save();

        return back()->with('status','Task Added Successfully');
    }
}
