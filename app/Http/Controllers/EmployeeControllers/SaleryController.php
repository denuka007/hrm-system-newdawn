<?php

namespace App\Http\Controllers\EmployeeControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Models\Advance;

class SaleryController extends Controller
{
    public function SaleryView() {

        return view('employee.emp_salery');
    }

    public function AdvanceReq($Id) {

            //check already apply for the advance
            $data = Advance::where('empId',$Id)
            ->whereMonth('created_at', Carbon::now()->month)
            ->exists();

        if($data == true)
        {
            return back()->with('error', 'Your Already Request a Advance');
        }

        else
        {
            $advance = new Advance();
            $advance->empId = $Id;
            $advance->position = Auth::user()->position;
            $advance->month =  Carbon::now()->toDateString();
            $advance->save();

            return back()->with('status', 'Your Request is send to Manager');
        }

    }
}
