@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Monthly Special Bonuses</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-success">
                      <tbody>
                        @foreach ($smonths as $smonth)
                        <tr>
                            <th scope="row">#</th>
                            <td>
                              {{$smonth->title}}
                            </td>
                            <td>
                              Rs. {{$smonth->rate}}
                            </td>
                          </tr>
                        @endforeach
                          <tr>
                            <th scope="row"></th>
                            <td>

                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-rounded btn-sm">Update</button>
                            </td>
                          </tr>
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
                <h5 class="card-title mb-0">Other Rates</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless table-info">
                      <tbody>
                        @foreach ($orates as $rates)
                        <tr>
                            <th scope="row">1</th>
                            <td>
                              {{$rates->title}}
                            </td>
                            <td>
                                Rs. {{$rates->rate}}
                            </td>
                          </tr>
                        @endforeach
                          <tr>
                            <th scope="row"></th>
                            <td>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-rounded btn-sm">Update</button>
                            </td>
                          </tr>
                      </tbody>
                    </table>
                  </div>

        </div>
    </div>
</div>
@endsection
