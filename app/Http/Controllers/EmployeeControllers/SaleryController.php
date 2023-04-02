<?php

namespace App\Http\Controllers\EmployeeControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use DB;

class SaleryController extends Controller
{
    public function SaleryView() {

        return view('employee.emp_salery');
    }
}
