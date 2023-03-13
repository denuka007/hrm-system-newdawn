@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Management</h5>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card h-40 align-items-center">
                                <img src="{{ asset('img/photos/pic03.jpg') }}" class="card-img-top"
                                    style="width: 150px; height: 150px" alt="Skyscrapers" />
                                <div class="card-body">
                                    <h3>Shift Management</h3>

                                </div>
                                <div class="card-footer">
                                    <a href="{{route('manager.shift')}}" class="btn btn-primary btn-rounded">Manage Shifts</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-40 align-items-center">
                                <img src="{{ asset('img/photos/pic02.jpg') }}" class="card-img-top"
                                    style="width: 150px; height: 150px" alt="Los Angeles Skyscrapers" />
                                <div class="card-body">
                                    <h3>Department Management</h3>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-success btn-rounded">Manage Departments</button>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-40 align-items-center">
                                <img src="{{ asset('img/photos/pic01.jpg') }}" class="card-img-top img-fluid rounded"
                                    style="width: 150px; height: 150px" alt="Palm Springs Road" />
                                <div class="card-body">
                                    <h3>Employee Assignment</h3>

                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-info btn-rounded">Assign Employees</button>
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
                    <h5 class="card-title mb-0">Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title mb-2">Unassign Employees</h4>
                            <table class="table table-hover table-secondary border-primary">
                                <thead>
                                    <tr class="table-primary">
                                    <th scope="col">EmpID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Satus</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Sit</td>
                                    <td>Amet</td>
                                    <td>Consectetur</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Adipisicing</td>
                                    <td>Elit</td>
                                    <td>Sint</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Hic</td>
                                    <td>Fugiat</td>
                                    <td>Temporibus</td>
                                  </tr>
                                </tbody>

                              </table>
                        </div>
                        <div class="col-6">
                            <h4 class="card-title mb-2">Active Departments</h4>
                            <table class="table table-hover table-secondary border-primary">
                                <thead>
                                    <tr class="table-primary">
                                    <th scope="col">DepID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Employee Count</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Sit</td>
                                    <td>Amet</td>
                                    <td>Consectetur</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Adipisicing</td>
                                    <td>Elit</td>
                                    <td>Sint</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Hic</td>
                                    <td>Fugiat</td>
                                    <td>Temporibus</td>
                                  </tr>
                                </tbody>

                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
