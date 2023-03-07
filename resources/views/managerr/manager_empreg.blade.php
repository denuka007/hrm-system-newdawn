@extends('managerr.manager_master')

@section('content')
    <h1 class="h3 mb-3">Enter Emmployee Details</h1>

    <form action="{{route('manager.register')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Personal Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <!-- Name input -->
                            <div class="form-outline">
                                <input type="text" name="name" class="form-control" />
                                <label class="form-label" for="form8Example1">Full Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Email input -->
                            <div class="form-outline">
                                <input type="text" name="address" class="form-control" />
                                <label class="form-label" for="form8Example2">Home address</label>
                            </div>
                        </div>
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col">
                            <!-- Name input -->
                            <div class="form-outline">
                                <input type="text" name="nic" class="form-control" />
                                <label class="form-label" for="form8Example3">NIC Number</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Name input -->
                            <div class="form-outline">
                                <input type="text" name="age" class="form-control" />
                                <label class="form-label" for="form8Example4">Age</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Name input -->
                            <div class="form-outline">
                                <input type="text" name="number" class="form-control" />
                                <label class="form-label" for="form8Example4">Mobile Number</label>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row g-3">
                        <div class="col-sm-7">
                            <div class="form-outline">
                                <input type="text" name="qualification" class="form-control" />
                                <label class="form-label" for="form10Example1">Enter Qualifications</label>
                            </div>
                        </div>
                        <div class="col-sm">
                            <select class="form-select mb-3" id="gender" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <select class="form-select mb-3" id="civil" name="civil">
                                <option value="married">Married</option>
                                <option value="unmarried">Unmarried</option>
                            </select>
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
                    <h5 class="card-title mb-0">Company Details</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <input type="file" class="form-control" id="image" name="image" />
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="position" class="form-control" />
                                <label class="form-label">Position</label>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-select mb-3" id="worktype" name="worktype">
                                <option selected>Work Type</option>
                                <option value="intern">Intern</option>
                                <option value="permenet">Permenet</option>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" name="emname" class="form-control" />
                            <label class="form-label" for="form8Example3">Emergency Contact Name</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <input type="text" name="emcontact" class="form-control" />
                            <label class="form-label" for="form8Example4">Emergency Contact Number</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <input type="email" name="email" class="form-control" />
                            <label class="form-label" for="form8Example5">Email address</label>
                          </div>
                        </div>
                      </div>
                      <hr/>
                      <div class="row">
                        <div class="col">
                          <div class="form-outline">
                            <input type="password" name="password" class="form-control" />
                            <label class="form-label" for="form8Example3">Enter Password</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <input type="password" name="password" class="form-control" />
                            <label class="form-label" for="form8Example4">Confirm Password</label>
                          </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                              <input type="text" name="id" class="form-control" />
                              <label class="form-label" for="form8Example4">Add Employee Id</label>
                            </div>
                          </div>
                      </div>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Register</button>
              </div>
        </div>
    </div>
</div>
<form/>
@endsection
