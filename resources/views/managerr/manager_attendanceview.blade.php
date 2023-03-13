@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Today Attendance Report</h5>
                </div>
                <div class="card-body">
                    <div class="card align-items-end">
                        <div class="row">
                            <div class="col">
                                <a class="btn text-white btn-sm" style="background-color: #e31414;" href="{{route('manager.attendancepdf')}}"
                                    role="button">
                                    <i class="align-middle" data-feather="download"></i>
                                    PDF
                                </a>
                                <a class="btn text-white btn-sm" style="background-color: #298a1a;" href="#"
                                    role="button">
                                    <i class="align-middle" data-feather="download"></i>
                                    EXCEL
                                </a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <th scope="col">EmpID</th>
                                <th scope="col">Name</th>
                                <th scope="col">ArriveTime</th>
                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($attendanceData as $attendanceDatas)
                                <tr>
                                    <th scope="row">{{ $attendanceDatas->empId }}</th>
                                    <td>{{ $attendanceDatas->name }}</td>
                                    <td>{{ $attendanceDatas->arrivetime }}</td>
                                    <td>{{ $attendanceDatas->status == '1' ? 'Ontime' : 'LateComming' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
