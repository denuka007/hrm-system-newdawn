@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Client Details</h5>
            </div>
            <div class="card-body">
                <section>
                    @foreach ($clientdt as $clientdt)
                    <div class="container py-3">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="card mb-4">
                            <div class="card-body text-center">
                              <img src="{{ asset('assets/uploads/clients/' . $clientdt->pic) }}" alt="avatar"
                                class="rounded-circle img-fluid" style="width: 150px;">
                              <h5 class="my-3">{{$clientdt->name}}</h5>
                            </div>
                            <button type="button" class="btn btn-danger btn-sm">Delete Profile</button>
                          </div>
                        </div>
                        <div class="col-lg-8">
                          <div class="card mb-4">
                            <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{$clientdt->name}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{$clientdt->email}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Type</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{$clientdt->type}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Mobile</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{$clientdt->mobile}}</p>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-sm-3">
                                  <p class="mb-0">Address</p>
                                </div>
                                <div class="col-sm-9">
                                  <p class="text-muted mb-0">{{$clientdt->address}}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </section>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Available Projects from Client</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-secondary ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">DueDate</th>
                      </tr>
                    </thead>
                    @foreach ($projectdt as $projectdt)
                    <tbody>
                      <tr>
                        <th scope="row">{{$projectdt->projectId}}</th>
                        <td>{{$projectdt->title}}</td>
                        <td>{{$projectdt->quantitiy}}</td>
                        <td>{{$projectdt->duedate}}</td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
