@extends('employee.emp_master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Manage Points</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-success mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                                        </div>
                                        <h3 class="card-title mb-2 d-flex justify-content-center">
                                            Available Points
                                        </h3>
                                        <div class="d-flex justify-content-center">
                                            <h5 class="card-title mb-2 d-flex justify-content-center">
                                                {{$stars}}
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-primary mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                                        </div>
                                        <h3 class="card-title mb-2 d-flex justify-content-center">
                                            Redeem Points
                                        </h3>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('emp.redeempoints')}}" class="btn btn-primary btn-rounded btn-sm">Redeem Points</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-warning mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                                        </div>
                                        <h3 class="card-title mb-2 d-flex justify-content-center">
                                            History
                                        </h3>

                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-warning btn-rounded btn-sm">View</button>
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
                                    <h5 class="card-title mb-0">Available Task</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-secondary ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Task</th>
                                                <th scope="col">Stars</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($tasks as $tasks)
                                            <tbody>
                                                <tr>
                                                    <th scope="row">{{ $tasks->taskId }}</th>
                                                    <td>{{ $tasks->task }}</td>
                                                    <td>{{ $tasks->star }}</td>
                                                    <td>
                                                        <a href="" class="btn btn-primary btn-sm">Done</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
