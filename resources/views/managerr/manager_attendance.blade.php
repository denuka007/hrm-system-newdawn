@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Attendance Details</h5>
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Today Absents</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">12</h1>

                                    <div class="mb-0">
                                        <a href="{{route('manager.absantview')}}" class="btn btn-info btn-rounded">View Absants</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Today Attendance</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">12</h1>

                                    <div class="mb-0">
                                        <a href="{{route('manager.attendanceview')}}" class="btn btn-success btn-rounded">View Attendance</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Today Leaves</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="log-out"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">12</h1>

                                    <div class="mb-0">
                                        <button class="btn btn-danger btn-rounded">View Leaves</button>
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
                    <h5 class="card-title mb-0">Attendance Marking</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-light">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">WorkType</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $emp)
                                <tr>
                                    <th scope="row">{{ $emp->empId }}</th>
                                    <td>{{ $emp->name }}</td>
                                    <td>{{ $emp->worktype }}</td>
                                    <td>{{ $emp->position }}</td>
                                    <td>
                                        <a href="{{ route('manager.attmark' , $emp->empId) }}" class="btn btn-link btn-sm px-3" data-ripple-color="dark"><i class="fas fa-check"></i></a>
                                        <a href="{{ route('manager.attabsant' , $emp->empId) }}" class="btn btn-link btn-sm px-3" data-ripple-color="dark"><i class="fas fa-xmark"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
