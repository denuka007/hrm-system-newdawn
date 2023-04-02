@extends('managerr.manager_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">All Employees</h5>
            </div>
            <div class="card-body">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">OT CountDown</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="watch"></i>
                                        </div>
                                    </div>
                                </div>

                                <h1 class="mt-1 mb-3"><div id="timer"></div></h1>

                                <div class="mb-0">
                                    <button type="button" class="btn btn-primary btn-rounded" id="start-btn" onclick="startTimer()">Start Time</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Assign for OverTime</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="arrow-up"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">12</h1>

                                <div class="mb-0">
                                    <a href="{{route('manager.assignot')}}" class="btn btn-success btn-rounded">Assign for OT</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">OverTime Details</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="info"></i>
                                        </div>
                                    </div>
                                </div>
                                <h1 class="mt-1 mb-3">112 Hours</h1>

                                <div class="mb-0">
                                    <a href="{{route('manager.otinfo')}}" class="btn btn-info btn-rounded">View Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">OverTime Working Employees</h5>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Shift ID</th>
                        <th>Department ID</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($ot as $ots)
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$ots->name}}</p>
                              <p class="text-muted mb-0">{{$ots->empId}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="fw-normal mb-1">{{$ots->position}}</p>
                        </td>
                        <td>
                            <h6>{{$ots->shiftId}}</h6>
                        </td>
                        <td>{{$ots->department}}</td>
                        <td>
                            <a href="{{route('manager.otresign', $ots->empId)}}" class="btn btn-warning btn-rounded btn-sm">Resign from OT</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

@endsection
