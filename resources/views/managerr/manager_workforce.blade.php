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
                                    <a href="{{route('manager.depmanage')}}" class="btn btn-success btn-rounded">Manage Departments</a>
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
                                    <a href="{{route('manager.empassign')}}" class="btn btn-info btn-rounded">Assign Employees</a>
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
                            <h4 class="card-title mb-2">Currently Working Employees</h4>
                            <table class="table table-hover table-secondary border-primary">
                                <thead>
                                    <tr class="table-primary">
                                    <th scope="col">EmpID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Satus</th>
                                  </tr>
                                </thead>
                                @foreach ($wemp as $emps)
                                <tbody>
                                    <tr>
                                      <th scope="row">{{$emps->empId}}</th>
                                      <td>{{$emps->name}}</td>
                                      <td>{{$emps->position}}</td>
                                      <td><span class="badge bg-{{$emps->workstatus == 0 ? 'success' : 'warning'}}">{{$emps->workstatus == 0 ? 'Free' : 'Busy'}}</span></td>
                                    </tr>
                                  </tbody>
                                @endforeach
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
                                @foreach ($adep as $deps)
                                <tbody>
                                    <tr>
                                      <th scope="row">{{$deps->depId}}</th>
                                      <td>{{$deps->depName}}</td>
                                      <td>{{$deps->empcount}}</td>
                                      <td>
                                        <span class="badge bg-{{$deps->status == 'Active' ? 'success' : 'danger'}}">{{$deps->status}}</span>
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
    </div>
@endsection
