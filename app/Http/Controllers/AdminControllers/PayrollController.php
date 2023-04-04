<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\OtherRates;
use App\Models\User;
use App\Models\AttendanceLog;
use App\Models\SpecialMonthsRates;
use App\Models\BasicAdvanceRates;
use App\Models\WorkHoursNormal;
use App\Models\WorkHoursOT;
use App\Models\positionassign;
use App\Models\position;
use App\Models\Advance;

class PayrollController extends Controller
{
    public function PayrollView() {

        return view('adminn.admin_payroll');
    }

    public function PayrollManagement() {

        return view('adminn.admin_payrollmanage');
    }

    public function PayrollBasicManage() {

        $basic = BasicAdvanceRates::all();
        return view('adminn.admin_basicandadvance', compact('basic'));
    }

    public function PayrollOtherScales() {

        $smonths = SpecialMonthsRates::all();
        $orates = OtherRates::all();
        return view('adminn.admin_otherscales', compact('smonths', 'orates'));
    }

    public function PayrollCalculation() {

        $emp = User::all();
        return view('adminn.admin_calculation', compact('emp'));
    }

    //Calculation Proccess Nowon !!!!

    public function PayrollEmpSaleryCal($Id) {

        $endmonth = Carbon::now()->endOfMonth()->toDateString();
        $nowdate = Carbon::now()->endOfMonth()->toDateString(); //Carbon::now()->toDateString();

        if($endmonth == $nowdate)
        {

            //geting present count
            $presentcount = AttendanceLog::where('emp_Id',$Id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('present');

            //geting leave count
            $leavecount = AttendanceLog::where('emp_Id',$Id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('leaves');

            //geting shortleave count
            $shortcount = AttendanceLog::where('emp_Id',$Id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('shortleave');

            //geting absant count
            $absantcount = AttendanceLog::where('emp_Id',$Id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('absant');

            //geting normal workhours
            $nhourscount = WorkHoursNormal::where('empId',$Id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('workhours');

            //geting overtime workhours
            $othourscount = WorkHoursOT::where('empId',$Id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->sum('othours');

            $positionid = positionassign::where('empId',$Id)->get('posid');
            foreach($positionid as $positionid)
            $posid = $positionid->posid; //final

            //getting advance get or not
            $advance = Advance::where('empId', $Id)->get('status');
            foreach($advance as $advance)
            $adstatus = $advance->status; //final

            $advanceamount = BasicAdvanceRates::where('posid', $posid)->get('advancelimit');
            foreach($advanceamount as $advanceamount)
            $adamount = $advanceamount->advancelimit;

            if($adstatus == 0)
            {
                $advancefinal = 0;
            }
            else
            {
                $advancefinal = $adamount;
            }

            //geting basic salery
            $basicamount = BasicAdvanceRates::where('posid', $posid)->get('basic');
            foreach($basicamount as $basicamount)
            $basic = $basicamount->basic;

            //getting other salery rates

            //getting salery amounts

            //normalwork hours amount
            $normalsalery = $nhourscount * 100;
            //ovetime hours amount
            $overtimesalery = $othourscount * 120;
            //absantcount deduction
            $absantdeduction = $absantcount * 1000;

            //calculation +
            $finalsalery = $basic + $normalsalery + $overtimesalery - $absantdeduction - $advancefinal;

            //EPF
            $EPFget = $finalsalery / 100;
            $EPF = $EPFget * 12;

            //EPF decution
            $finalsalery = $finalsalery - $EPF;

            // condition checking for allowance
            $now = Carbon::now()->format('M');
            if($absantcount == 0)
            {
                $finalsalery + 3000;
            }
            elseif($now == 'Apr')
            {
                $finalsalery + 4000;
            }
            elseif($now == 'Dec')
            {
                $finalsalery + 4000;
            }

            dd($finalsalery);


            // return view('adminn.admin_salerycal');
        }
        else
        {
            return back()->with('error', 'Today is Not End of the Month');
        }
    }

}
