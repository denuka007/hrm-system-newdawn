@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Salery Invoice</h5>
            </div>
            <div class="card-body">

              @foreach ($data as $sal)
              <div class="card">
                <div class="card-body">
                  <div class="container mb-5 mt-3">
                    <div class="row d-flex align-items-baseline">
                      <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #{{$sal->id}}</strong></p>
                      </div>
                      <div class="col-xl-3 float-end">
                        <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
                            class="fas fa-print text-primary"></i> Print</a>
                        <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
                            class="far fa-file-pdf text-danger"></i> Export</a>
                      </div>
                      <hr>
                    </div>

                    <div class="container">
                      <div class="col-md-12">
                        <div class="text-center">
                          <h2 class="fw-bold" style="color:#5d9fc5 ;">New Dawn</h2>
                          <p class="pt-0">Garment Factory</p>
                        </div>

                      </div>


                      <div class="row">
                        <div class="col-xl-8">
                          <ul class="list-unstyled">
                            <li class="text-muted">Name: <span style="color:#5d9fc5 ;">{{$sal->name}}</span></li>
                            <li class="text-muted">Position: {{$sal->position}}</li>
                            <li class="text-muted">Galle</li>
                            <li class="text-muted">Sri Lanka</li>
                          </ul>
                        </div>
                        <div class="col-xl-4">
                          <p class="text-muted">Invoice</p>
                          <ul class="list-unstyled">
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="fw-bold">ID: </span>#{{$sal->id}}</li>
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="fw-bold">Creation Date: </span>{{$sal->date}}</li>
                            <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                                class="me-1 fw-bold">Status:</span><span class="badge bg-{{$sal->status == 0 ? 'warning' : 'success'}} text-black fw-bold">
                                    {{$sal->status == 0 ? 'pending' : 'paid'}}</span></li>
                          </ul>
                        </div>
                      </div>

                      <div class="row my-2 mx-1 justify-content-center">
                        <table class="table table-striped table-borderless">
                          <thead style="background-color:#84B0CA ;" class="text-white">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Description</th>
                              <th scope="col">Hours</th>
                              <th scope="col">Rates</th>
                              <th scope="col">Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Basic Salery</td>
                              <td>-</td>
                              <td>Rs. {{$sal->basic}}</td>
                              <td>Rs. {{$sal->basic}}</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>NormalTime Hours</td>
                              <td>{{$sal->normalhours}}</td>
                              <td>Rs. 100</td>
                              <td>Rs. {{$sal->normalsal}}</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>OverTime Hours</td>
                              <td>{{$sal->othours}}</td>
                              <td>Rs. 120</td>
                              <td>Rs. {{$sal->otsal}}</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Allowance</td>
                                <td>-</td>
                                <td>Rs. 4000</td>
                                <td>Rs. {{$sal->newyear}}{{$sal->chrismas}}</td>
                              </tr>
                          </tbody>

                        </table>
                      </div>
                      <div class="row">
                        <div class="col-xl-8">
                          <p class="ms-3">Salery deduction details--------------------------------------------------------------------------------------</p>

                        </div>
                        <div class="col-xl-3">
                          <ul class="list-unstyled">
                            <li class="text-muted ms-3"><span class="text-black me-4">Advance</span>-{{$sal->advance}}</li>
                            <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Absants</span>-{{$sal->absal}}</li>
                            <li class="text-muted ms-3 mt-2"><span class="text-black me-4">EPF(%)</span>-{{$sal->epf}}</li>
                          </ul>
                          <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                              style="font-size: 25px;">Rs. {{$sal->finalsal}}</span></p>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-xl-10">
                          <p>Thank you for your working with #New Dawn</p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
