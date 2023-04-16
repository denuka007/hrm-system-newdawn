<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoyaltyPointController extends Controller
{
    public function LoyalPointView() {

        return view('adminn.loyaltypoint.admin_loyal');
    }
}
