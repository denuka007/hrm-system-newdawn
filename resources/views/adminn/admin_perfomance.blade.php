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
                                        <h5 class="card-title ">Individual Employee Status</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="slack"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="{{route('admin.individualperfomance')}}" class="btn btn-primary btn-rounded">VIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Perfomancee comparison</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="doller-sign"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="{{route('admin.perfomancecompare')}}" class="btn btn-success btn-rounded">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Perfomance Evaluation</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="#" class="btn btn-info btn-rounded">VIEW</a>
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
                <h5 class="card-title mb-0">Top 5 Perfomarce on Pervious Month</h5>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection
