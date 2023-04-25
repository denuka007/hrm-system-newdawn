<?php

namespace App\Http\Controllers\EmployeeControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Points;
use App\Models\PointHistory;
use App\Models\redeem;

class EmpLoyalPointsController extends Controller
{
    public function LoyalPointView() {

        $id = Auth::user()->empId;

        $tasks = Task::all();
        $points = Points::where('empId', $id)->get('starcount');
        foreach($points as $points)
        $stars = $points->starcount;

        return view('employee.emp_loyalpoint', compact('tasks','stars'));
    }

    public function RedeemPointsView() {

        $id = Auth::user()->empId;

        $points = Points::where('empId', $id)->get('starcount');
        foreach($points as $points)
        $stars = $points->starcount;

        return view('employee.emp_redeem', compact('stars'));
    }

    public function RedeemPointsDone(Request $request) {

        $id = Auth::user()->empId;

        //request point count
        $redeem = $request->points;
        //available point count
        $points = Points::where('empId', $id)->get('starcount');
        foreach($points as $points)
        $apoints = $points->starcount;

        if($redeem > $apoints)
        {
            return back()->with('error','Your point balance is insufficient to redeem');
        }
        else
        {

            $redem = new redeem();

            $redem->empId = $id;
            $redem->name = Auth::user()->name;
            $redem->stars = $redeem;
            $redem->date = Carbon::now()->toDateString();
            $redem->save();

            $starget = Points::where('empId', $id)->get();
            foreach($starget as $starget)
            $strid = $starget->id;

            $pointst = Points::find($strid);
            $pointst->decrement('starcount', $redeem);

            return back()->with('status','Point Redeem is success');
        }
    }
}
