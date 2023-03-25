@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Shift</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('manager.updateshift' , $shifts->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <h4 class="mb-3 h6 text-muted">Shift ID</h4>
                        <div class="form-outline mb-4">
                            <input type="text" name="shiftId" class="form-control" value="{{$shifts->shift_Id}}" />
                        </div>

                        <h4 class="mb-3 h6 text-muted">Shift StartTime</h4>
                        <div class="form-outline mb-4">
                            <input type="time" name="stime" class="form-control" placeholder="StartTime" value="{{$shifts->start_time}}" />
                        </div>

                        <h4 class="mb-3 h6 text-muted">Shift EndTime</h4>
                        <div class="form-outline mb-4">
                            <input type="time" name="etime" class="form-control" placeholder="EndTime" value="{{$shifts->end_time}}" />
                        </div>

                        <h4 class="mb-3 h6 text-muted">Shift Status</h4>
                        <div class="form-outline mb-4">
                            <select class="form-select mb-3" id="status" name="status">
                                <option selected>{{$shifts->status}}</option>
                                <option value="NormalTime">NormalTime</option>
                                <option value="OverTime">OverTime</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Shift</button>
                </div>


                </form>
            </div>
        </div>
    </div>
@endsection
