@extends('employee.emp_master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Quick Access</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                @foreach ($state as $states)
                                    @if ($states->empId == Auth::user()->empId)
                                        <div class="card shadow-none bg-transparent border border-primary mb-3">
                                            <div class="card-body">
                                                <div class="card-title d-flex align-items-start justify-content-center">
                                                    <i class="menu-icon tf-icons bx bx-sun"></i>
                                                </div>
                                                <span class="d-block mb-1 d-flex justify-content-center">Today Status</span>
                                                <h3 class="card-title mb-2 d-flex justify-content-center mt-2">Attended</h3>
                                                <div class="d-flex justify-content-center">
                                                    <span
                                                        class="badge bg-{{ $states->status == 0 ? 'warning' : 'success' }}">{{ $states->status == 0 ? 'LateComming' : 'OnTime' }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card shadow-none bg-transparent border border-danger mb-3">
                                            <div class="card-body">
                                                <div class="card-title d-flex align-items-start justify-content-center">
                                                    <i class="menu-icon tf-icons bx bx-sun"></i>
                                                </div>
                                                <span class="d-block mb-1 d-flex justify-content-center">Today Status</span>
                                                <h3 class="card-title mb-2 d-flex justify-content-center mt-2">Absant</h3>
                                                <div class="d-flex justify-content-center">
                                                    <span class="badge bg-primary mt-1"></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @endforeach
                            </div>

                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-secondary mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-check"></i>
                                        </div>
                                        <span class="d-block mb-1 d-flex justify-content-center">Attendace Count</span>

                                        <h3 class="card-title mb-2 d-flex justify-content-center">
                                            $total
                                        </h3>

                                        <div class="d-flex justify-content-center">
                                            <button type="button"
                                                class="btn btn-secondary btn-rounded btn-sm">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-success mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-user-x"></i>
                                        </div>
                                        <span class="d-block mb-1 d-flex justify-content-center">Available Leaves</span>
                                        <h3 class="card-title mb-2 d-flex justify-content-center">3</h3>
                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="btn btn-success btn-rounded btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#modalCenter">Request</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-6 mb-4">
                                <div class="card shadow-none bg-transparent border border-info mb-3">
                                    <div class="card-body">
                                        <div class="card-title d-flex align-items-start justify-content-center">
                                            <i class="menu-icon tf-icons bx bx-run"></i>
                                        </div>
                                        <span class="d-block mb-1 d-flex justify-content-center">Request shortleave</span>
                                        <h3 class="card-title mb-2 d-flex justify-content-center">1</h3>
                                        <div class="d-flex justify-content-center">
                                            <a href="{{route('emp.shortleave', Auth::user()->empId)}}" class="btn btn-info btn-rounded btn-sm">Request</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- Leaves Model-->
        <form action="{{route('emp.leaverequest',Auth::user()->empId)}}" method="POST">
            @csrf
        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalCenterTitle">Request a Leave</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="nameWithTitle" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                            <label class="form-label">Reason in Breif</label>
                            <textarea class="form-control" name="reason" id="reason" rows="3"></textarea>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                            <label class="form-label">Choose date for leave</label>
                            <div class="col-md-10">
                                <input class="form-control" type="date" value="2023-03-30" id="date" name="date" />
                            </div>
                        </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
        <!--End Leaves Model-->


        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">My Recent Activites</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-6 mb-4">
                                <table class="table table-bordered border-primary">
                                    <thead>
                                        <tr>
                                            <th scope="col">Arrive Time</th>
                                            <th scope="col">Present Date</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    @foreach ($attmemo as $memos)
                                        <tbody>
                                            <tr>
                                                <td>{{ $memos->arrivetime }}</td>
                                                <td>{{ $memos->present_date }}</td>
                                                <td>
                                                    <span
                                                        class="badge bg-{{ $memos->status == 0 ? 'danger' : 'success' }}">{{ $memos->status == 0 ? 'LateComming' : 'OnTime' }}</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="col-lg-6 col-md-8 col-6 mb-4">
                                <table class="table table-bordered border-success">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Reason</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($leaves as $leave)
                                    <tbody>
                                        <tr>
                                            <td>{{$leave->leavedate}}</td>
                                            <td>{{$leave->reason}}</td>
                                            <td>
                                                <span
                                                        class="badge bg-{{ $leave->status == 0 ? 'warning' : 'primary' }}">{{ $leave->status == 0 ? 'Pending' : 'Accepted' }}</span>
                                            </td>
                                            <td>
                                                @if ($leave->status == 0)
                                                <a href="{{route('emp.leavecancel', $leave->id)}}" class="btn btn-danger btn-rounded btn-sm">Cancel</a>
                                                @else
                                                <button type="button"
                                                class="btn btn-danger btn-rounded btn-sm" disabled>Cancel</button>
                                                @endif

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
@endsection
