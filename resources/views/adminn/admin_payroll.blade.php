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
                    <div class="col-3 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0 ">
                                        <h5 class="card-title ">Payroll Informations</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="slack"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="{{route('admin.payrollmanagement')}}" class="btn btn-primary btn-rounded">VIEW INFO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Salery Calculation</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="doller-sign"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="{{route('admin.calculation')}}" class="btn btn-success btn-rounded">Calculate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Managers Salery</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="users"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="#" class="btn btn-info btn-rounded">Manage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <h5 class="card-title">Advance Requests</h5>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <i class="align-middle" data-feather="twitch"></i>
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-0">
                                    <a href="{{route('admin.advancereq')}}" class="btn btn-warning btn-rounded">View Requests</a>
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
                <h5 class="card-title mb-0">Pervious months Salerys</h5>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                      <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Month</th>
                        <th>Salery</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach ($info as $info)
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$info->name}}</p>
                              <p class="text-muted mb-0">Rs. {{$info->basic}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="fw-normal mb-1">{{$info->position}}</p>
                        </td>
                        <td>
                          {{$info->month}}
                        </td>
                        <td>{{$info->finalsal}}</td>
                        <td>
                          <button type="button" class="btn btn-primary btn-sm">
                            View
                          </button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
