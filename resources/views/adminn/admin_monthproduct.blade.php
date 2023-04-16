@extends('adminn.admin_master')

@section('content')
@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Select Month</h5>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    01
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'1'])}}" class="btn btn-primary btn-rounded btn-sm" class="btn btn-primary btn-rounded btn-sm">January</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    02
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'2'])}}" class="btn btn-primary btn-rounded btn-sm" class="btn btn-primary btn-rounded btn-sm">February</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    03
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'3'])}}" class="btn btn-primary btn-rounded btn-sm" class="btn btn-primary btn-rounded btn-sm">March</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    04
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'4'])}}" class="btn btn-primary btn-rounded btn-sm">April</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    05
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'5'])}}" class="btn btn-primary btn-rounded btn-sm">May</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    06
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'6'])}}" class="btn btn-primary btn-rounded btn-sm">June</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    07
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'7'])}}" class="btn btn-primary btn-rounded btn-sm">July</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    08
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'8'])}}" class="btn btn-primary btn-rounded btn-sm">August</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    09
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'9'])}}" class="btn btn-primary btn-rounded btn-sm">September</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    10
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'10'])}}" class="btn btn-primary btn-rounded btn-sm">October</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    11
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'11'])}}" class="btn btn-primary btn-rounded btn-sm">November</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <h3 class="card-title mb-2 d-flex justify-content-center">
                                    12
                                </h3>

                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.getproductivity', [$empid,'12'])}}" class="btn btn-primary btn-rounded btn-sm">December</a>
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

@endsection
