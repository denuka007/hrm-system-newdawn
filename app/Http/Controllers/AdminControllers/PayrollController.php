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
use App\Models\Salery;
use App\Models\EmpInbox;
use Barryvdh\DomPDF\Facade\Pdf;

class PayrollController extends Controller
{
    public function PayrollView() {

        $info = Salery::all();
        return view('adminn.admin_payroll', compact('info'));
    }

    public function PayrollManagement() {

        $bdata = BasicAdvanceRates::all();
        $odata = OtherRates::all();
        return view('adminn.admin_payrollmanage',compact('bdata','odata'));
    }

    public function PayrollCalculation() {

        $emp = User::all();
        return view('adminn.admin_calculation', compact('emp'));
    }

    public function AdvanceReq() {

        $ad = Advance::all();
        return view('adminn.admin_adreq', compact('ad'));
    }

    public function AdvanceReqAccept($Id) {

        $adstate = Advance::find($Id);
        $adstate->increment('status', 1);

        $id = Advance::where('id',$Id)->get('empId');
        foreach($id as $id)
        $empid = $id->empId;

        $msg = new EmpInbox();
        $msg->empId = $empid;
        $msg->msg = 'Your Advance is accepted by admin check your bank balance';
        $msg->type = 2;
        $msg->save();

        return back()->with('msg', 'Advance Request Accepted');
    }

    public function AdvanceReqReject($Id) {

        $id = Advance::where('id',$Id)->get('empId');
        foreach($id as $id)
        $empid = $id->empId;

        $msg = new EmpInbox();
        $msg->empId = $empid;
        $msg->msg = 'Your Advance is Rejected';
        $msg->type = 1;
        $msg->save();

        $adrejct = Advance::find($Id);
        $adrejct->delete();

        return back()->with('msg', 'Advance Request Rejected');
    }

    //Calculation Proccess Nowon !!!!

    public function PayrollEmpSaleryCal($Id) {

        $salery = new Salery();
        $now = Carbon::now()->format('M');
        $endmonth = Carbon::now()->endOfMonth()->toDateString();
        $nowdate = Carbon::now()->toDateString(); //Carbon::now()->toDateString();

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

            //getting employee name
            $userdata = User::where('empId', $Id)->get('name');
            foreach($userdata as $userdata)
            $name = $userdata->name;

            //getting position id
            $positionid = positionassign::where('empId',$Id)->get('posid');
            foreach($positionid as $positionid)
            $posid = $positionid->posid; //final

            //geting position name
            $posdata = position::where('posid', $posid)->get('posname');
            foreach($posdata as $posdata)
            $posname = $posdata->posname;

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

            if($absantcount == 0)
            {
                $finalsalery + 3000;
                $salery->allcome = 3000;
            }
            else
            {
                $finalsalery + 0;
            }

            if($now == 'Apr')
            {
                $finalsalery + 4000;
                $salery->newyear = 4000;
            }
            else
            {
                $finalsalery + 0;
            }

            if($now == 'Dec')
            {
                $finalsalery + 4000;
                $salery->chrismas = 4000;
            }
            else
            {
                $finalsalery + 0;
            }

            //adding data to salery db
            $salery->empId = $Id;
            $salery->month = $now;
            $salery->present = $presentcount;
            $salery->leave = $leavecount;
            $salery->short = $shortcount;
            $salery->absant = $absantcount;
            $salery->othours = $othourscount;
            $salery->normalhours = $nhourscount;
            $salery->advance = $advancefinal;
            $salery->basic = $basic;
            $salery->normalsal = $normalsalery;
            $salery->otsal = $overtimesalery;
            $salery->absal = $absantdeduction;
            $salery->epf = $EPF;
            $salery->finalsal = $finalsalery;
            $salery->date = $nowdate;
            $salery->position = $posname;
            $salery->name = $name;
            $salery->save();

            return back()->with('msg', 'Employee Salery is Calculated');
        }
        else
        {
            return back()->with('error', 'Today is Not End of the Month');
        }
    }

    public function SaleryHistory() {

        return view('adminn.admin_salhistory');
    }

    public function SaleryHistoryView($Id) {

        if(Salery::where('month', $Id)->exists())
        {
             $data = Salery::where('month', $Id)->get();
             return view('adminn.admin_salhistoryview', compact('data'));
        }
        else
        {
            return back()->with('error', 'No Data Available in This month');
        }

    }

    public function SingleSaleryView($Id) {

        $data = Salery::where('empId', $Id)->get();
        return view('adminn.admin_singlesalview',compact('data'));
    }

    public function ReportDownload() {

        $sals = Salery::all();
        $pdf = Pdf::loadView('adminn.pdf.salery',['sals'=>$sals])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('saleryreport.pdf');
    }

}
