<?php

namespace App\Http\Controllers\EmployeeControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class EmpLoyalPointsController extends Controller
{
    public function LoyalPointView() {

        return view('employee.emp_loyalpoint');
    }
}
