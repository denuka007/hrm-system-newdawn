@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Results</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <table class="table table-striped table-hover table-borderless table-secondary ">
                            <thead>
                              <tr>
                                <th scope="col">Month</th>
                                <th scope="col" class="text-center">Present Count</th>
                                <th scope="col" class="text-center">Absant Count</th>
                                <th scope="col" class="text-center">Presentage</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">{{$month01}}</th>
                                <td class="text-center">{{$presentdates}}</td>
                                <td class="text-center">{{$absantdates}}</td>
                                <td class="text-center">{{$month01pre}}%</td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="col-6">
                        <table class="table table-striped table-hover table-borderless table-secondary ">
                            <thead>
                              <tr>
                                <th scope="col">Month</th>
                                <th scope="col" class="text-center">Present Count</th>
                                <th scope="col" class="text-center">Absant Count</th>
                                <th scope="col" class="text-center">Presentage</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">{{$month02}}</th>
                                <td class="text-center">{{$presentdates02}}</td>
                                <td class="text-center">{{$absantdates02}}</td>
                                <td class="text-center">{{$month02pre}}%</td>
                              </tr>
                            </tbody>
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
                <h5 class="card-title mb-0">Details</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover table-bordered table-info ">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">Conclusions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>{{$presentst}}</td>
                      </tr>
                      <tr>
                        <td>{{$absantst}}</td>
                      </tr>
                      <tr>
                        <td>{{$presentagest}}</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
