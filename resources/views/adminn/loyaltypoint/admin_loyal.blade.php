@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Loyalty System</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0 ">
                                        <h5 class="card-title ">Terms and Conditions</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="help-circle"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="" class="btn btn-primary btn-rounded btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Monthly Point Details</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="list"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="" class="btn btn-success btn-rounded btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Task Management</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="target"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="" class="btn btn-info btn-rounded btn-sm">Go</a>
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
                <h5 class="card-title mb-0">Top 5 star archivers of Month</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover table-success ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Stars</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">EMP-002</th>
                        <td>Arthur Shelby</td>
                        <td>Machine operator</td>
                        <td>50</td>
                        <td>
                            <a href="" class="btn btn-success btn-rounded btn-sm">Go</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">EMP-002</th>
                        <td>Arthur Shelby</td>
                        <td>Machine operator</td>
                        <td>50</td>
                        <td>
                            <a href="" class="btn btn-success btn-rounded btn-sm">Go</a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">EMP-002</th>
                        <td>Arthur Shelby</td>
                        <td>Machine operator</td>
                        <td>50</td>
                        <td>
                            <a href="" class="btn btn-success btn-rounded btn-sm">Go</a>
                        </td>
                      </tr>
                    </tbody>

                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
