@extends('employee.emp_master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Redeem Points Here</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-6 mb-4">
                            <div class="card shadow-none bg-transparent border border-success mb-3">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-center">
                                        <i class="menu-icon tf-icons bx bx-link-alt"></i>
                                    </div>
                                    <h3 class="card-title mb-2 d-flex justify-content-center">
                                        Available Points
                                    </h3>
                                    <div class="d-flex justify-content-center">
                                        <h5 class="card-title mb-2 d-flex justify-content-center">
                                            {{$stars}}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-6 mb-4">
                            <div class="card shadow-none bg-transparent border border-primary mb-3">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-center">
                                        <i class="menu-icon tf-icons bx bx-money"></i>
                                    </div>
                                    <h3 class="card-title mb-2 d-flex justify-content-center">
                                        Price of Point
                                    </h3>
                                    <div class="d-flex justify-content-center">
                                        <h5 class="card-title mb-2 d-flex justify-content-center">
                                            Rs. 100
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-6 mb-4">
                            <div class="card shadow-none bg-transparent border border-warning mb-3">
                                <div class="card-body">
                                    <div class="card-title d-flex align-items-start justify-content-center">
                                        <i class="menu-icon tf-icons bx bx-history"></i>
                                    </div>
                                    <h3 class="card-title mb-2 d-flex justify-content-center">
                                        Redeem History
                                    </h3>
                                    <div class="d-flex justify-content-center">
                                        <h5 class="card-title mb-2 d-flex justify-content-center">
                                            <a href="" class="btn btn-warning btn-sm">View</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{route('emp.redeemdone')}}" method="POST">
                        @csrf
                    <div class="row mt-3">
                        <div class="row mb-4">
                            <div class="col-4">
                                <label class="form-label" for="form6Example1">Enter Point Count</label>
                                <input type="number" id="points" name="points" class="form-control" />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-2">
                                <button type="submit" class="btn btn-primary btn-sm">Redeem</button>
                            </div>
                          </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
