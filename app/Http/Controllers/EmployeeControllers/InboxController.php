<?php

namespace App\Http\Controllers\EmployeeControllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\EmpInbox;
use DB;

class InboxController extends Controller
{
    public function InboxView() {

        $msg = EmpInbox::where('empId',Auth::user()->empId)->get();
        return view('employee.emp_inbox', compact('msg'));
    }

    public function ClearAll() {

        DB::table('emp_inboxes')->delete();
        return back();
    }
}
