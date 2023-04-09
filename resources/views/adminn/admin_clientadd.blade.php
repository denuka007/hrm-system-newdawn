@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">New Client</h5>
            </div>
            <form action="{{route('admin.clientdone')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="name" name="name" class="form-control" required/>
                        <label class="form-label" for="form6Example1">Client name</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="address" name="address" class="form-control" required/>
                        <label class="form-label" for="form6Example2">Address</label>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="mobile" name="mobile" class="form-control" required/>
                        <label class="form-label" for="form6Example1">Mobile</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                        <input type="email" id="email" name="email" class="form-control" />
                        <label class="form-label" for="form6Example2">Email Address</label>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <input type="file" class="form-control" id="image" name="image" />
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="location" name="location" class="form-control" />
                        <label class="form-label" for="form6Example2">Location</label>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-4">
                    <div class="col">
                      <div class="form-outline">
                        <select class="form-select mb-3" id="type" name="type">
                            <option value="company">Company</option>
                            <option value="person">Person</option>
                        </select>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-outline">
                        <input type="text" id="id" name="id" class="form-control" />
                        <label class="form-label" for="form6Example2">Enter Client ID</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <button type="submit" class="btn btn-primary btn-sm">Register</button>
                  </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
