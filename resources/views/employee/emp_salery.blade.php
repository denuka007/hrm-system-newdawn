@extends('employee.emp_master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Quick Access</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-primary mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                                        </div>
                                        <span class="d-block mb-1 d-flex justify-content-center">Previous Salery</span>

                                        <h3 class="card-title mb-2 d-flex justify-content-center">
                                            Rs. 24900
                                        </h3>

                                        <div class="d-flex justify-content-center">
                                            <button type="button"
                                                class="btn btn-primary btn-rounded btn-sm">View Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-danger mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                                        </div>
                                        <span class="d-block mb-1 d-flex justify-content-center">Next Salery Date</span>

                                        <h3 class="card-title mb-2 d-flex justify-content-center">
                                            {{\Carbon\Carbon::now()->endOfMonth()->toDateString()}}
                                        </h3>

                                        <div class="d-flex justify-content-center">
                                            <h5 class="card-title mb-2 d-flex justify-content-center">
                                                28 Days Remaining
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-info mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-run"></i>
                                        </div>
                                        <span class="d-block mb-1 d-flex justify-content-center">Request Advance</span>
                                        <h3 class="card-title mb-2 d-flex justify-content-center">Limit: 5000</h3>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('emp.advancereq', Auth::user()->empId)}}" class="btn btn-info btn-rounded btn-sm">Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-success mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-x"></i>
                                        </div>
                                        <span class="d-block mb-1 d-flex justify-content-center">Loan</span>
                                        <h3 class="card-title mb-2 d-flex justify-content-center">Not Qualified</h3>
                                        <div class="d-flex justify-content-center">
                                            <button type="button"
                                                class="btn btn-success btn-rounded btn-sm">Get Loan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">My Salery History</h5>
                    </div>
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
