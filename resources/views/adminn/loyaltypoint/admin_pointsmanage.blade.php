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
                        <th>Position</th>
                        <th>Worktype</th>
                        <th>Actions</th>
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
                          <td>
                            <p class="fw-normal mb-1">{{$emps->position}}</p>
                          </td>
                          <td>{{$emps->worktype}}</td>
                          <td>
                            <a href="{{route('admin.pointassign', $emps->empId)}}" class="btn btn-primary btn-sm">Add Points</a>
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
