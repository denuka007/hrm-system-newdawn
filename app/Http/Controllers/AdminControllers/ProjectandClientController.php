<?php

namespace App\Http\Controllers\AdminControllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\Projects;

class ProjectandClientController extends Controller
{
    public function ProjectView() {

        $clientdata = Clients::all();
        return view('adminn.admin_projects', compact('clientdata'));
    }

    public function ClientAdd() {

        return view('adminn.admin_clientadd');
    }

    public function ClientAddDone(Request $request) {

        $client = new Clients();

        $filename = time() . "." . $request->image->extension();
        $request->image->move(public_path('assets/uploads/clients'), $filename);

        $client->clientId = $request->id;
        $client->name = $request->name;
        $client->address = $request->address;
        $client->mobile = $request->mobile;
        $client->email = $request->email;
        $client->pic = $filename;
        $client->type = $request->type;
        $client->location = $request->location;
        $client->save();

        return back()->with('status',"New Client Added Successfully");
    }

    public function ProjectAdd() {

        $data = Clients::all();
        return view('adminn.admin_projectadd', compact('data'));
    }

    public function ProjectAddDone(Request $request) {

        $project = new Projects();
        $project->clientId = $request->client;
        $project->projectId = $request->id;
        $project->title = $request->title;
        $project->quantitiy = $request->qty;
        $project->duedate = $request->date;
        $project->save();

        return back()->with('status',"New Project Added Successfully");
    }

    public function ClientView($Id) {

        $projectdt = Projects::where('clientId', $Id)->get();
        $clientdt = Clients::where('clientId', $Id)->get();
        return view('adminn.admin_clientview', compact('clientdt', 'projectdt'));
    }
}
