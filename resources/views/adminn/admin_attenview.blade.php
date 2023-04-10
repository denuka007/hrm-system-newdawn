@extends('adminn.admin_master')

@section('content')
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
                                        <h5 class="card-title ">Attendance Presentage</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="pie-chart"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <h3 class="text-primary fw-bold">{{$pre}}%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Absant Presentage</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="pie-chart"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <h3 class="text-primary fw-bold">{{$ab}}%</h3>
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
                                    <h3 class="text-{{ $status == 'Poor' ? 'danger' : 'primary' }} fw-bold">{{$status}}</h3>
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
                <h5 class="card-title mb-0">Attendance Logs</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <table class="table table-hover table-bordered table-primary ">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">ArriveTime</th>
                                <th scope="col">Date</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            @foreach ($attenlog as $attenlog)
                            <tbody>
                              <tr>
                                <td>{{$attenlog->name}}</td>
                                <td>{{$attenlog->arrivetime}}</td>
                                <td>{{$attenlog->present_date}}</td>
                                <td>{{ $attenlog->status == '1' ? 'Ontime' : 'LateComming' }}</td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                    </div>
                    <div class="col-6">
                        <table class="table table-hover table-bordered table-danger ">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            @foreach ($absantlog as $absantlog)
                            <tbody>
                              <tr>
                                <td>{{$absantlog->abname}}</td>
                                <td>{{$absantlog->absantdate}}</td>
                              </tr>
                            </tbody>
                            @endforeach
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
