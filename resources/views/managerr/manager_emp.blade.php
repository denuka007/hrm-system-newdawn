@extends('managerr.manager_master')

@section('content')
    <h1 class="h3 mb-3">Employee Management</h1>

    <div class="row">
        <div class="col-12">
            <div class="card align-items-center">
                <div class="card-header">
                    <h5 class="card-title mb-0">New Employees and Departments</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('manage.empreg') }}">
                        <button type="button" class="btn btn-primary btn-lg">Add New Employee</button>
                    </a>
                    <a href="{{ route('manage.depreg') }}">
                        <button type="button" class="btn btn-info btn-lg">Add New Department</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--PopUp Screen-->

    <!--PopUp Screen End-->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">All Empoyees</h5>
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
                            @foreach ($data as $emp)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/uploads/' . $emp->propic) }}" alt=""
                                                style="width: 45px; height: 45px" class="rounded-circle" />
                                            <div class="ms-3">
                                                <p class="fw-bold mb-1">{{ $emp->name }}</p>
                                                <p class="text-muted mb-0">{{ $emp->email }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="fw-normal mb-1">{{ $emp->position }}</p>
                                        <p class="text-muted mb-0"></p>
                                    </td>
                                    <td>
                                        <span class="badge badge-success rounded-pill d-inline">Active</span>
                                    </td>
                                    <td>{{ $emp->worktype }}</td>
                                    <td>
                                        <a href="{{ route('manager.editEmp' , $emp->id) }}" class="btn btn-success btn-rounded btn-sm">Edit</a>
                                        <a href="{{ route('manager.deleteEmp' , $emp->id) }}" class="btn btn-danger btn-rounded btn-sm">Delete</a>
                                        <a href="{{ route('manager.viewEmp' , $emp->id) }}" class="btn btn-primary btn-rounded btn-sm">View</a>

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
