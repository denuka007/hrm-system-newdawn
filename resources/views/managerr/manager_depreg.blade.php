@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Empty card</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('manager.depregister') }}" method="POST">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="text" name="depid" class="form-control" />
                            <label class="form-label">Enter department ID</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="text" name="name" class="form-control" />
                            <label class="form-label">Department Name</label>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-primary btn-block">Add New Department</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="card flex-fill">
        <div class="card-header">

            <h5 class="card-title mb-0">Current Departments</h5>
        </div>
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
                        <a href="{{ route('manager.depdelete' , $deps->id) }}" class="btn btn-danger btn-rounded btn-sm">Delete</a>
                        <a href="#" class="btn btn-primary btn-rounded btn-sm">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
