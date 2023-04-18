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
                        <th>Gender</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    @foreach ($all as $all)
                    <tbody>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center">
                              <img
                                  src="{{ asset('assets/uploads/' . $all->propic) }}"
                                  class="rounded-circle"
                                  alt=""
                                  style="width: 45px; height: 45px"
                                  />
                              <div class="ms-3">
                                <p class="fw-bold mb-1">{{$all->name}}</p>
                                <p class="text-muted mb-0">{{$all->empId}}</p>
                              </div>
                            </div>
                          </td>
                          <td>
                            <p class="text-muted mb-0">{{$all->position}}</p>
                          </td>
                          <td>
                            {{$all->worktype}}
                          </td>
                          <td>
                            {{$all->gender}}
                          </td>
                          <td>
                            <a href="{{route('admin.evoview' ,$all->empId)}}" class="btn btn-success btn-sm">Go</a>
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
