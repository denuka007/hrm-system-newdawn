@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Perfomance of Employee</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0 ">
                                        <h5 class="card-title">Attendance</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="check"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <h3 class="fw-bold text-primary">{{$preage1}}%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Productivity</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="layers"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <h3 class="fw-bold text-info">{{$proage1}}%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border border-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Overall</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="pie-chart"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <h3 class="fw-bold text-success">{{$overall}}%</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border border-success">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Status</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="slack"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <h3 class="fw-bold text-success">Good</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
