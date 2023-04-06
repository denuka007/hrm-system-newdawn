@extends('adminn.admin_master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Current Salery States</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-sm table-info border-success">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Position</th>
                                  <th scope="col">Basic Salery</th>
                                  <th scope="col">Advance Limit</th>
                                </tr>
                              </thead>
                              @foreach ($bdata as $bdata)
                              <tbody>
                                <tr>
                                  <th scope="row">{{$bdata->id}}</th>
                                  <td>{{$bdata->position}}</td>
                                  <td>Rs. {{$bdata->basic}}</td>
                                  <td>Rs. {{$bdata->advancelimit}}</td>
                                </tr>
                              </tbody>
                              @endforeach
                            </table>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered table-sm table-success border-success">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Payment Variable</th>
                                  <th scope="col">Rate</th>
                                </tr>
                              </thead>
                              @foreach ($odata as $odata)
                              <tbody>
                                <tr>
                                  <th scope="row">{{$odata->id}}</th>
                                  <td>{{$odata->title}}</td>
                                  <td>Rs. {{$odata->rate}}</td>
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
