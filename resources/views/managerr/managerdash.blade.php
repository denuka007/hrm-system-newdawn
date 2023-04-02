@extends('managerr.manager_master')

@section('content')

<h1 class="h3 mb-3"><strong>Manager</strong> Dashboard</h1>

<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Start Shift</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="clock"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3"><div id="timer"></div></h1>

                            <div class="mb-0">
                                <button class="btn btn-secondary btn-rounded btn-sm" id="start-btn" onclick="startTimer()">Start Timer</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Available Projects</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="archive"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">12</h1>

                            <div class="mb-0">
                                <button class="btn btn-info btn-rounded btn-sm">View Projects</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Total Employees</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">20</h1>

                            <div class="mb-0">
                                <button class="btn btn-primary btn-rounded btn-sm">View All</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Today Present</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="user-check"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">5</h1>

                            <div class="mb-0">
                                <button class="btn btn-success btn-rounded btn-sm">View Shift</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-xxl-7">
        <div class="card flex-fill w-100">
            <div class="card-header">

                <h5 class="card-title mb-0">Todo List</h5>
            </div>
            <div class="card-body py-3">

            </div>
        </div>
    </div>
</div>


@endsection
