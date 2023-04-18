@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Top 5 Attendance Behaviour</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h6>Present</h6>
                        <table class="table table-bordered table-secondary ">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Presentage</th>
                              </tr>
                            </thead>
                            @foreach ($presenttop as $presenttop)
                            <tbody>
                                <tr>
                                  <th scope="row">{{$presenttop->empId}}</th>
                                  <td>{{$presenttop->name}}</td>
                                  <td>{{$presenttop->position}}</td>
                                  <td>{{$presenttop->present}}%</td>
                                </tr>
                              </tbody>
                            @endforeach
                          </table>
                    </div>
                    <div class="col-6">
                        <h6>Absant</h6>
                        <table class="table table-bordered table-secondary ">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Presentage</th>
                              </tr>
                            </thead>
                            @foreach ($absanttop as $absanttop)
                            <tbody>
                              <tr>
                                <th scope="row">{{$absanttop->empId}}</th>
                                <td>{{$absanttop->name}}</td>
                                <td>{{$absanttop->position}}</td>
                                <td>{{$absanttop->absant}}%</td>
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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Top 5 Overtime & Salery Behaviour</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h6>OverTime</h6>
                        <table class="table table-bordered table-secondary ">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Presentage</th>
                                </tr>
                            </thead>
                            @foreach ($ottop as $ottop)
                            <tbody>
                                <tr>
                                  <th scope="row">{{$ottop->empId}}</th>
                                  <td>{{$ottop->name}}</td>
                                  <td>{{$ottop->position}}</td>
                                  <td>{{$ottop->overtime}}%</td>
                                </tr>
                              </tbody>
                            @endforeach
                          </table>
                    </div>
                    <div class="col-6">
                        <h6>Salery</h6>
                        <table class="table table-bordered table-secondary ">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Month</th>
                                <th scope="col">Salery</th>
                              </tr>
                            </thead>
                            @foreach ($saltop as $saltop)
                            <tbody>
                                <tr>
                                  <th scope="row">{{$saltop->empId}}</th>
                                  <td>{{$saltop->month}}</td>
                                  <td>Rs. {{$saltop->finalsal}}</td>
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
@endsection
