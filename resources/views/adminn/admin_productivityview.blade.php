@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Quick View</h5>
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
                                                        <h5 class="card-title ">Target Count</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="pie-chart"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-0">
                                                    <h3 class="text-primary fw-bold">{{$prodcount}}</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Target Presentage</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="pie-chart"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-0">
                                                    <h3 class="text-primary fw-bold">{{$prodpre}}%</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Productivity Status</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="award"></i>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="mb-0">
                                                    <h3 class="text-danger fw-bold">{{$prostatus}}</h3>
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
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    @foreach ($prodt as $prodt)
                    <tbody>
                      <tr>
                        <td>{{$prodt->empId}}</td>
                        <td>{{$prodt->name}}</td>
                        <td>{{$prodt->position}}</td>
                        <td>{{$prodt->date}}</td>
                        <td>{{ $prodt->target == '1' ? 'Covered' : 'Not Covered' }}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
