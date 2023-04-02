@extends('managerr.manager_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Available Leave Requests</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-light">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leaves as $leave)
                            <tr>
                                <th scope="row">{{ $leave->empId }}</th>
                                <td>{{ $leave->name }}</td>
                                <td>{{ $leave->leavedate }}</td>
                                <td>{{ $leave->reason }}</td>
                                <td>
                                    <span
                                           class="badge bg-{{ $leave->status == 0 ? 'warning' : 'primary' }}">{{ $leave->status == 0 ? 'Pending' : 'Accepted' }}</span>
                                </td>
                                <td>
                                    @if ($leave->status == 0)
                                        <a href="{{route('manager.leaveaccept', $leave->id)}}" class="btn btn-primary btn-rounded btn-sm">Accept</a>
                                        <a href="{{route('manager.leavereject', $leave->id)}}" class="btn btn-danger btn-rounded btn-sm">Reject</a>
                                    @else
                                        <a href="{{route('manager.leavereject', $leave->id)}}" class="btn btn-danger btn-rounded btn-sm">Reject</a>
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
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Available ShortLeave Requests</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-light">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sleave as $sleaves)
                            <tr>
                                <th scope="row">{{ $sleaves->empId }}</th>
                                <td>{{ $sleaves->name }}</td>
                                <td>{{ $sleaves->date }}</td>
                                <td>
                                        <a href="{{route('manager.acceptshort',$sleaves->id )}}" class="btn btn-primary btn-rounded btn-sm">Accept</a>
                                        <a href="{{route('manager.rejectshort',$sleaves->id )}}" class="btn btn-danger btn-rounded btn-sm">Reject</a>
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
