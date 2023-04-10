@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Empty card</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Quick Access</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0 ">
                                                        <h5 class="card-title ">Total OT Hours</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="pie-chart"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-0">
                                                    <h3 class="text-primary fw-bold">{{$othours}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Monthly OT Presentage</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="pie-chart"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-0">
                                                    <h3 class="text-primary fw-bold">12</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Overroll Status</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="award"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-0">
                                                    <h3 class="text-danger fw-bold">Poor</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                <h5 class="card-title mb-0">OverTime History</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered table-warning ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Department ID</th>
                        <th scope="col">shift</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    @foreach ($otlog as $otlog)
                    <tbody>
                      <tr>
                        <td>{{$otlog->empId}}</td>
                        <td>{{$otlog->department}}</td>
                        <td>{{$otlog->shiftId}}</td>
                        <td>{{$otlog->Otdate}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
