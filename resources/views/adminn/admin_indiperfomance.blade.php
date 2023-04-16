@extends('adminn.admin_master')

@section('content')
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
                                <a href="{{route('admin.attenperfomace', $emps->empId)}}" class="btn btn-primary btn-sm">View</a>
                            </td>
                            <td class="text-center">
                                <a href="{{route('admin.overperfomance', $emps->empId)}}" class="btn btn-success btn-sm">View</a>
                            </td>
                            <td class="text-center">
                                <a href="{{route('admin.productperfomance', $emps->empId)}}" class="btn btn-info btn-sm">View</a>
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
