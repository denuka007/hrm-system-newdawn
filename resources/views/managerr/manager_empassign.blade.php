@extends('managerr.manager_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Employee Assignment</h5>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                                <th>Name</th>
                                <th>Job Title</th>
                                <th>Status</th>
                                <th>Work Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($emp as $emps)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/uploads/' . $emps->propic) }}" alt=""
                                                style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">{{ $emps->name }}</p>
                                                <p class="text-muted mb-0">{{ $emps->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">{{ $emps->position }}</p>
                                        <p class="text-muted mb-0"></p>
                                    </td>
                                    <td>
                                        <span class="badge bg-{{$emps->workstatus == 0 ? 'success' : 'warning'}}">{{$emps->workstatus == 0 ? 'Free' : 'Busy'}}</span>
                                    </td>
                                    <td>{{ $emps->worktype }}</td>
                                    <td>
                                        @if ($emps->workstatus == 0)
                                        <a href="{{route('manager.assignboth', $emps->id)}}" class="btn btn-primary btn-rounded btn-sm">Assign for Work</a>
                                        @else
                                        <a href="{{route('manager.resignwork', $emps->empId)}}" class="btn btn-secondary btn-rounded btn-sm">Resign from Work</a>
                                        @endif
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
