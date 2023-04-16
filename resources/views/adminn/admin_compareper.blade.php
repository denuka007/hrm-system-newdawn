@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Overroll Perfomance Logs</h5>
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
                                Attendance
                            </h3>

                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-primary btn-rounded btn-sm" class="btn btn-primary btn-rounded btn-sm">View</a>
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
                                OverTime
                            </h3>

                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-success btn-rounded btn-sm" class="btn btn-primary btn-rounded btn-sm">View</a>
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
                                Productivitiy
                            </h3>

                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-warning btn-rounded btn-sm" class="btn btn-primary btn-rounded btn-sm">View</a>
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
                                Salery
                            </h3>

                            <div class="d-flex justify-content-center">
                                <a href="" class="btn btn-info btn-rounded btn-sm" class="btn btn-primary btn-rounded btn-sm">View</a>
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
                <h5 class="card-title mb-0">Select Employee</h5>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                      <tr>
                        <th>Name</th>
                        <th class="text-center">Attendance</th>
                        <th class="text-center">OverTime</th>
                        <th class="text-center">Productivity</th>
                        <th class="text-center">Salery</th>
                      </tr>
                    </thead>
                    @foreach ($emps as $emps)
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                                src="{{ asset('assets/uploads/' . $emps->propic) }}"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$emps->name}}</p>
                              <p class="text-muted mb-0">{{$emps->empId}}</p>
                            </div>
                          </div>
                        </td>
                        <td class="text-center">
                            <a href="{{route('admin.attencompare',$emps->empId)}}" class="btn btn-primary btn-sm">Compare</a>
                        </td>
                        <td class="text-center">
                            <a href="{{route('admin.otcompare',$emps->empId)}}" class="btn btn-success btn-sm">Compare</a>
                        </td>
                        <td class="text-center">
                            <a href="{{route('admin.productcompare',$emps->empId)}}" class="btn btn-warning btn-sm">Compare</a>
                        </td>
                        <td class="text-center">
                            <a href="{{route('admin.salerycompare',$emps->empId)}}" class="btn btn-info btn-sm">Compare</a>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
