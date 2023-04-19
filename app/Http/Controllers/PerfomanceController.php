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
        $otpre = $othours /100 * 100;
        $otp = (integer)$otpre;

        //getting status
        $otstatus;

        if($otp >= 100)
        {
            $otstatus = 'Over Limit';
        }
        elseif($otp >= 50)
        {
            $otstatus = 'Normal';
        }
        elseif($otp >= 25)
        {
            $otstatus = 'Poor';
        }
        else
        {
            $otstatus = 'Very Poor';
        }

        $otlog = OtMemory::where('empId',$Id)
        ->whereMonth('created_at', $Month)
        ->get();

        return view('adminn.admin_otview', compact('otlog', 'othours','otp','otstatus'));
    }

    public function PerfomanceProduct($Id) {

        $empid = $Id;
        return view('adminn.admin_monthproduct', compact('empid'));
    }

    public function ProductGet($Id, $Month) {

        $prodcount = Productivity::where('empId',$Id)
        ->whereMonth('created_at', $Month)
        ->sum('target');

        //get presentage
        $pro = $prodcount / 30 * 100;
        $prodpre = (integer)$pro;

        //get status

        $prostatus;

        if($prodpre == 100)
        {
            $prostatus = 'Excellent';
        }
        elseif($prodpre >= 75)
        {
            $prostatus = 'Good';
        }
        elseif($prodpre >= 50)
        {
            $prostatus = 'Avarage';
        }
        elseif($prodpre >= 25)
        {
            $prostatus = 'Poor';
        }
        else
        {
            $prostatus = 'Very Poor';
        }

        $prodt = Productivity::where('empId',$Id)
        ->whereMonth('created_at', $Month)
        ->get();

        return view('adminn.admin_productivityview', compact('prodt', 'prodcount', 'prodpre', 'prostatus'));
    }

    public function CompareAttendance($Id) {

        $id = $Id;
        $users = User::all();
        return view('adminn.admin_attencompare', compact('users', 'id'));
    }

    public function CompareAttenEmp(Request $request, $Id) {

        $month = $request->month;
        $curemp = $Id;
        $selemp = $request->emp;

        //getting current empdata
        $presentdates = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $month)
        ->sum('present');

        $absantdates = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $month)
        ->sum('absant');

        $currentpre = $presentdates / 26 * 100;
        $cpre = (integer)$currentpre;

        //getting selected empdata
        $presentdates02 = AttendanceLog::where('emp_Id',$selemp)
        ->whereMonth('created_at', $month)
        ->sum('present');

        $absantdates02 = AttendanceLog::where('emp_Id',$selemp)
        ->whereMonth('created_at', $month)
        ->sum('absant');

        $selectpre = $presentdates02 / 26 * 100;
        $spre = (integer)$selectpre;

        $cpresentst = '';
        $cpresentdif = 0;

        $cabsantst = '';
        $cabsantdif = 0;

        $cpresentagest = '';
        $cpresentagedif = 0;

        //getting conclustions
        if($presentdates > $presentdates02)
        {
            $cpresentdif = $presentdates - $presentdates02;
            $cpresentst = 'Employee '.$curemp.' present count is higher than employee '.$selemp.' by '.$cpresentdif;
        }
        else
        {
            $cpresentdif = $presentdates02 - $presentdates;
            $cpresentst = 'Employee '.$selemp.' present count is higher than employee '.$curemp.' by '.$cpresentdif;
        }

        if($absantdates > $absantdates02)
        {
            $cabsantdif = $absantdates - $absantdates02;
            $cabsantst = 'Employee '.$curemp.' absant count is higher than employee '.$selemp.' by '.$cabsantdif;
        }
        else
        {
            $cabsantdif = $absantdates02 - $absantdates;
            $cabsantst = 'Employee '.$selemp.' absant count is higher than employee '.$curemp.' by '.$cabsantdif;
        }

        if($cpre > $spre)
        {
            $cpresentagedif = $cpre - $spre;
            $cpresentagest = 'Employee '.$curemp.' presentage is higher than employee '.$selemp.' by '.$cpresentagedif.'%';
        }
        else
        {
            $cpresentagedif = $spre - $cpre;
            $cpresentagest = 'Employee '.$selemp.' presentage is higher than employee '.$curemp.' by '.$cpresentagedif.'%';
        }

        return view('adminn.admin_compareattenresult',compact('month','curemp','selemp','presentdates','absantdates','cpre','presentdates02','absantdates02','spre','cpresentst','cabsantst','cpresentagest'));
    }

    public function CompareAttenMonths(Request $request, $Id) {

        $month01 = $request->month1;
        $month02 = $request->month2;

        //getting month01 details
        $presentdates = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $month01)
        ->sum('present');

        $absantdates = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $month01)
        ->sum('absant');

        $m1pre = $presentdates / 26 * 100;
        $month01pre = (integer)$m1pre;

        //getting month02 details
        $presentdates02 = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $month02)
        ->sum('present');

        $absantdates02 = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $month02)
        ->sum('absant');

        $m2pre = $presentdates02 / 26 * 100;
        $month02pre = (integer)$m2pre;

        $presentst = '';
        $presentdif = 0;

        $absantst = '';
        $absantdif = 0;

        $presentagest = '';
        $presentagedif = 0;

        //check month01 bigger than month02 present
        if($presentdates > $presentdates02)
        {
           $presentdif = $presentdates - $presentdates02;
           $presentst = 'Month '.$month01.' present count is higher than Month '.$month02.' present count by '.$presentdif.' Days';
        }
        else
        {
            $presentdif = $presentdates02 - $presentdates;
            $presentst = 'Month '.$month02.' present count is higher than Month '.$month01.' present count by '.$presentdif.' Days';
        }

        //check month01 absant count bigger than month02
        if($absantdates > $absantdates02)
        {
            $absantdif = $absantdates - $absantdates02;
            $absantst = 'Month '.$month01.' absant count is higher than Month '.$month02.' absant count by '.$absantdif.' Days';
        }
        else
        {
            $absantdif = $absantdates02 - $absantdates;
            $absantst = 'Month '.$month02.' absant count is higher than Month '.$month01.' absant count by '.$absantdif.' Days';
        }

        //check month01 presentage bigger than month02
        if($month01pre > $month02pre)
        {
            $presentagedif = $month01pre - $month02pre;
            $presentagest = 'Month '.$month01.' presentage is higher than Month '.$month02.' presentage count by '.$presentagedif.'%';
        }
        else
        {
            $presentagedif = $month02pre - $month01pre;
            $presentagest = 'Month '.$month02.' presentage is higher than Month '.$month01.' presentage count by '.$presentagedif.'%';
        }

        return view('adminn.admin_compareattenmonths', compact('presentdates','absantdates','month01pre','presentdates02','absantdates02','month02pre','month01','month02','presentst','absantst','presentagest'));
    }

    public function CompareOvertime($Id) {

        $id = $Id;
        $users = User::all();
        return view('adminn.otcompare.admin_otcompare', compact('id','users'));
    }

    public function CompareProductivity($Id) {

        $id = $Id;
        $users = User::all();
        return view('adminn.productcompare.admin_productcompare', compact('id','users'));
    }

    public function CompareSalery($Id) {

        $id = $Id;
        $users = User::all();
        return view('adminn.salerycompare.admin_salerycompare', compact('id','users'));
    }

    //Perfomance Evaluation Proccess

    public function PerfomanceEvo() {

        return view('adminn.evo.admin_evaluation');
    }

    public function PerfomanceTerms() {

        $date = Carbon::now();
        $previous =  $date->subMonth()->format('m');

        //get present top
        $presenttop = Presentages::orderBy('present', 'desc')
        ->whereMonth('created_at', $previous)
        ->get();
        //get absant top
        $absanttop = Presentages::orderBy('absant', 'desc')
        ->whereMonth('created_at', $previous)
        ->get();
        //get overtime top
        $ottop = Presentages::orderBy('overtime', 'desc')
        ->whereMonth('created_at', $previous)
        ->get();
        //get salery top
        //get april data for testing in here
        $saltop  = Salery::orderBy('finalsal', 'desc')
        //->whereMonth('created_at', $previous)
        ->get();

        return view('adminn.evo.admin_topperfomance', compact('presenttop','absanttop','ottop','saltop'));
    }

    public function EvoSelectEmp() {

        $all = User::all();
        return view('adminn.evo.admin_evoselect', compact('all'));
    }

    public function EvoView($Id) {

        //getting pervious month
        $date = Carbon::now();
        $previous =  $date->subMonth()->format('m');

        //attendance presentage
        $pdates = AttendanceLog::where('emp_Id',$Id)
        ->whereMonth('created_at', $previous)
        ->sum('present');

        $preage = $pdates / 26 * 100;
        $preage1 = (integer)$preage;

        //productivity presentage
        $pro = Productivity::where('empId',$Id)
        ->whereMonth('created_at', $previous)
        ->sum('target');

        $proage = $pro / 30 * 100;
        $proage1 = (integer)$proage;

        //getting overall presentage
        $tot = $preage1 + $proage1;
        $overall = $tot / 200 * 100;

        //getting overall status
        $ovstatus;

        if($overall == 100)
        {
            $ovstatus = 'Excellent';
        }
        elseif($overall >= 75)
        {
            $ovstatus = 'Very Good';
        }
        elseif($overall >= 65)
        {
            $ovstatus = 'Good';
        }
        elseif($overall >= 50)
        {
            $ovstatus = 'Normal';
        }
        elseif($overall >= 35)
        {
            $ovstatus = 'Poor';
        }
        else
        {
            $ovstatus = 'Very Poor';
        }

        //evaluation need to add db (future)

        return view('adminn.evo.admin_evoview', compact('preage1','proage1','overall','ovstatus'));
    }
}
