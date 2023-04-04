@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card align-items-center">
            <div class="card-header">
                <h5 class="card-title mb-0">Manage Salery Scales</h5>
            </div>
            <div class="card-body">
                <a href="{{route('admin.basicandadvance')}}">
                    <button type="button" class="btn btn-primary btn-lg">Basic Salery and Advance</button>
                </a>
                <a href="{{route('admin.otherscales')}}">
                    <button type="button" class="btn btn-info btn-lg">Other Salery Scales</button>
                </a>
            </div>
        </div>
    </div>
</div>

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

                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Designer</td>
                                  <td>Rs. 20000</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>Qualitiy Checker</td>
                                  <td>Rs. 18000</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>Tailor</td>
                                  <td>Rs. 16000</td>
                                </tr>
                              </tbody>

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
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Bonus</td>
                                  <td>Not this month</td>
                                </tr>
                                <tr>
                                  <th scope="row">2</th>
                                  <td>All Day working</td>
                                  <td>Rs. 3000</td>
                                </tr>
                                <tr>
                                  <th scope="row">3</th>
                                  <td>OT hours</td>
                                  <td>Rs. 120</td>
                                </tr>
                              </tbody>

                            </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
