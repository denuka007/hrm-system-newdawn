@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card align-items-center">
            <div class="card-header">
                <h5 class="card-title mb-0">Add new Client or Project</h5>
            </div>
            <div class="card-body">
                <a href="{{route('admin.clientadd')}}">
                    <button type="button" class="btn btn-info btn-lg">Add New Client</button>
                </a>
                <a href="{{route('admin.projectadd')}}">
                    <button type="button" class="btn btn-primary btn-lg">Add New Project</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Available Clients and Projects</h5>
            </div>
            <div class="card-body">
                <table class="table align-middle mb-0 bg-white">
                    <thead class="bg-light">
                      <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Type</th>
                        <th>Projects</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    @foreach ($clientdata as $client)
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                                src="{{ asset('assets/uploads/clients/' . $client->pic) }}"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                                />
                            <div class="ms-3">
                              <p class="fw-bold mb-1">{{$client->name}}</p>
                              <p class="text-muted mb-0">{{$client->email}}</p>
                            </div>
                          </div>
                        </td>
                        <td>
                          <p class="fw-normal mb-1">{{$client->address}}</p>
                          <p class="text-muted mb-0">{{$client->location}}</p>
                        </td>
                        <td>
                            {{$client->type}}
                        </td>
                        <td>{{$client->projects}}</td>
                        <td>
                          <a href="{{route('admin.clientview', $client->clientId)}}" class="btn btn-primary btn-sm btn-rounded">View</a>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
