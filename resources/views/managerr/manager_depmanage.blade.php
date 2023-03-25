@extends('managerr.manager_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Manage Department</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover my-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th class="d-none d-xl-table-cell">Department ID</th>
                            <th class="d-none d-xl-table-cell">Assign Employees</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dep as $deps)
                        <tr>
                            <td>{{$deps->depName}}</td>
                            <td class="d-none d-xl-table-cell">{{$deps->depId}}</td>
                            <td class="d-none d-xl-table-cell">{{$deps->empcount}}</td>
                            <td><span class="badge bg-{{$deps->status == 'Active' ? 'success' : 'danger'}}">{{$deps->status}}</span></td>
                            <td>
                                <a href="{{route('manager.depactive', $deps->id)}}" class="btn btn-primary btn-rounded btn-sm">Active</a>
                                <a href="{{route('manager.depshutdown', $deps->id)}}" class="btn btn-danger btn-rounded btn-sm">ShutDown</a>
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
