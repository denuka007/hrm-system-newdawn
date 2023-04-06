@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Info</h5>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                                </div>
                                <span class="d-block mb-1 d-flex justify-content-center">Salery Report Download</span>

                                <div class="d-flex justify-content-center">
                                        <a href="{{route('admin.reportpdf')}}" class="btn btn-primary btn-rounded btn-sm me-3">Download</a>
                                        <button type="button"
                                        class="btn btn-info btn-rounded btn-sm">Notify</button>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-6 mb-4">
                        <div class="card shadow-none bg-transparent border border-info mb-3">
                            <div class="card-body">
                                <div class="card-title d-flex align-items-start justify-content-center">
                                    <i class="menu-icon tf-icons bx bx-run"></i>
                                </div>
                                <span class="d-block mb-1 d-flex justify-content-center">Salery History</span>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('admin.salhistory')}}" class="btn btn-warning btn-rounded btn-sm">VIEW HISTORY</a>
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
                                <span class="d-block mb-1 d-flex justify-content-center">Loan Requests</span>

                                <div class="d-flex justify-content-center">
                                    <button type="button"
                                        class="btn btn-success btn-rounded btn-sm">View Requests</button>
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
                <h5 class="card-title mb-0">Current Employees</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-primary">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Position</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      @foreach ($emp as $emp)
                      <tbody>
                        <tr>
                          <th scope="row">{{$emp->empId}}</th>
                          <td>{{$emp->name}}</td>
                          <td>{{$emp->position}}</td>
                          <td>
                            <a href="{{route('admin.empsal', $emp->empId)}}" class="btn btn-success btn-sm">Go</a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach

                    </table>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
