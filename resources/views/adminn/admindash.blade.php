@extends('adminn.admin_master')

@section('content')

<h1 class="h3 mb-3"><strong>Welcome </strong>{{Auth::guard('admin')->user()->name}}</h1>

<div class="row">
    <div class="col-xl-6 col-xxl-5 d-flex">
        <div class="w-100">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Today Attendance</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">21</h1>
                            <div class="mb-0">
                                <button type="button" class="btn btn-primary btn-rounded btn-sm">View Details</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Available Projects</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="archive"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">12</h1>

                            <div class="mb-0">
                                <button class="btn btn-info btn-rounded btn-sm">View Projects</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Total Employees</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="users"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">20</h1>

                            <div class="mb-0">
                                <button class="btn btn-success btn-rounded btn-sm">View All</button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Today Absant</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="user-x"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">3</h1>
                            <div class="mb-0">
                                <button class="btn btn-warning btn-rounded btn-sm">View All</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-xxl-7">
        <div class="card flex-fill w-100">
            <div class="card-header">

                <h5 class="card-title mb-0">Top 4 Performers Employees Of The Month</h5>
            </div>
            <div class="card-body py-3">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Presentage</th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider table-divider-color">
                      <tr>
                        <th scope="row">EMP-01</th>
                        <td>Tommy Shelby</td>
                        <td>Tailor</td>
                        <td>22%</td>
                      </tr>
                      <tr>
                        <th scope="row">EMP-02</th>
                        <td>Arthur Shelby</td>
                        <td>Machine operator</td>
                        <td>12%</td>
                      </tr>
                      <tr>
                        <th scope="row">EMP-02</th>
                        <td>John Shelby</td>
                        <td>Designer</td>
                        <td>9%</td>
                      </tr>
                      <tr>
                        <th scope="row">EMP-02</th>
                        <td>Denuka Uwanpriya</td>
                        <td>Designer</td>
                        <td>9%</td>
                      </tr>

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">statistices</h5>
            </div>
            <div class="card-body">
                <h4></h4>
            </div>
        </div>
    </div>
</div>

@endsection
