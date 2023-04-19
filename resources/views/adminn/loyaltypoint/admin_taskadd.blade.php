@extends('adminn.admin_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Task Manage</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0 ">
                                            <h5 class="card-title ">Task Manage</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather=""></i>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-0">
                                        <div class="row">
                                            <div class="col-2">
                                            <a href="" class="btn btn-danger btn-sm">Reset</a>
                                            </div>
                                            <div class="col-2 ms-3">
                                                <a href="" class="btn btn-success btn-sm">Reedom</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Today Tasks</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="list"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-0">
                                        <h3 class="fw-bold text-success">3</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Task Accept</h5>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="target"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-0">
                                        <a href="#" class="btn btn-info btn-rounded btn-sm">Go</a>
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
                    <h5 class="card-title mb-0">Add Tasks</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.taskadd')}}" method="POST">
                        @csrf
                    <div class="row mb-4">
                        <div class="col-3">
                            <div class="form-outline">
                                <input type="text" id="id" name="id" class="form-control" />
                                <label class="form-label" for="form6Example1">Task ID</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-outline">
                                <input type="text" id="task" name="task" class="form-control" />
                                <label class="form-label" for="form6Example2">Task</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline">
                                <input type="number" id="star" name="star" class="form-control" />
                                <label class="form-label" for="form6Example1">Star</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary btn-sm">Add</button>
                        </div>
                    </div>
                    </form>
                    <div class="row">
                        <table class="table table-striped table-primary ">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Task</th>
                                    <th scope="col">Star Count</th>
                                </tr>
                            </thead>
                            @foreach ($tsk as $tsk)
                            <tbody>
                                <tr>
                                    <th scope="row">{{$tsk->taskId}}</th>
                                    <td>{{$tsk->task}}</td>
                                    <td>{{$tsk->star}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
