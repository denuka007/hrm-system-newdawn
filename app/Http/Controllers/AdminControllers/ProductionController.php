<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Productivity;

class ProductionController extends Controller
{
    public function ProductionView() {

        $emps = User::all();
        return view('adminn.admin_production', compact('emps'));
    }

    public function ProductionAdd(Request $request,$Id) {

        $pro = new Productivity();
        $dta = User::where('empId', $Id)->get();
        foreach($dta as $dta)
        $name = $dta->name;
        $position = $dta->position;
        $pro->empId = $Id;
        $pro->name = $name;
        $pro->position = $position;
        $pro->date = Carbon::now()->toDateString();
        $pro->target = $request->radio;
        $pro->save();

        return back()->with('msg','Daily Target is marked');
    }
}
