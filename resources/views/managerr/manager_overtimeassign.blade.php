@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Assign Employees for OT</h5>
                </div>
                <div class="card-body">


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Select Shift</th>
                                <th scope="col">Select Department</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        @foreach ($employee as $emp)
                            <tbody>
                                <tr>
                                    <td>{{ $emp->empId }}</td>
                                    <td>{{ $emp->name }}</td>
                                    <form action="{{ route('manager.otassigndone', $emp->empId) }}" method="post">
                                        @csrf
                                        <td>
                                            <select class="form-select mb-3" id="shiftid" name="shiftid">
                                                @foreach ($shift as $sft)
                                                    <option value="{{ $sft->shift_Id }}">{{ $sft->shift_Id }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-select mb-3" id="depid" name="depid">
                                                @foreach ($department as $dep)
                                                    <option value="{{ $dep->depId }}">{{ $dep->depId }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-sm">Assign</button>
                                        </td>
                                    </form>
                                </tr>
                        @endforeach
                        </tbody>

                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection
