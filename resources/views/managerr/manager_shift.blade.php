@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card align-items-center">
                <div class="card-header">
                    <h5 class="card-title mb-0">Add New Shifts</h5>
                </div>
                <div class="card-body">

                    <button type="button" class="btn btn-primary btn-lg" data-mdb-toggle="modal"
                        data-mdb-target="#exampleModal">Add New Shift Here</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Shift Here</h5>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('manager.shiftreg')}}" method="post">
                        @csrf
                        <h4 class="mb-3 h6 text-muted">Shift ID</h4>
                        <div class="form-outline mb-4">
                            <input type="text" name="shiftId" class="form-control" />
                            <label class="form-label">Enter ShiftID</label>
                        </div>

                        <h4 class="mb-3 h6 text-muted">Shift StartTime</h4>
                        <div class="form-outline mb-4">
                            <input type="time" name="stime" class="form-control" placeholder="StartTime" />
                        </div>

                        <h4 class="mb-3 h6 text-muted">Shift EndTime</h4>
                        <div class="form-outline mb-4">
                            <input type="time" name="etime" class="form-control" placeholder="EndTime" />
                        </div>

                        <h4 class="mb-3 h6 text-muted">Shift Status</h4>
                        <div class="form-outline mb-4">
                            <select class="form-select mb-3" id="status" name="status">
                                <option selected>Status</option>
                                <option value="NormalTime">NormalTime</option>
                                <option value="OverTime">OverTime</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Shift</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Available Shifts</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Shift ID</th>
                                    <th scope="col">Start Time</th>
                                    <th scope="col">End Time</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all as $shifts)
                                <tr>
                                    <th scope="row">{{$shifts->shift_Id}}</th>
                                    <td>{{$shifts->start_time}}</td>
                                    <td>{{$shifts->end_time}}</td>
                                    <td>{{$shifts->status}}</td>
                                    <td>
                                        <a href="{{route('manager.shiftedit', $shifts->id)}}" class="btn btn-success btn-rounded btn-sm">Edit</a>
                                        <a href="{{route('manager.shiftdelete', $shifts->id)}}" class="btn btn-danger btn-rounded btn-sm">Delete</a>
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
