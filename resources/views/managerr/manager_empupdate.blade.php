@extends('managerr.manager_master')

@section('content')
    <h1 class="h3 mb-3">Update {{ $employees->name }} Details</h1>

    <form action="{{ route('manager.updateEmpDone' , $employees->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                                        <input type="text" name="name" class="form-control"
                                            value="{{ $employees->name }}" />
                                        <label class="form-label" for="form8Example1">Full Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                        <input type="text" name="address" class="form-control"
                                            value="{{ $employees->address }}" />
                                        <label class="form-label" for="form8Example2">Home address</label>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <div class="row">
                                <div class="col">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                        <input type="text" name="nic" class="form-control"
                                            value="{{ $employees->nic }}" />
                                        <label class="form-label" for="form8Example3">NIC Number</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                        <input type="text" name="age" class="form-control"
                                            value="{{ $employees->age }}" />
                                        <label class="form-label" for="form8Example4">Age</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Name input -->
                                    <div class="form-outline">
                                        <input type="text" name="number" class="form-control"
                                            value="{{ $employees->mobile }}" />
                                        <label class="form-label" for="form8Example4">Mobile Number</label>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row g-3">
                                <div class="col-sm-7">
                                    <div class="form-outline">
                                        <input type="text" name="qualification" class="form-control"
                                            value="{{ $employees->qualification }}" />
                                        <label class="form-label" for="form10Example1">Enter Qualifications</label>
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <select class="form-select mb-3" id="gender" name="gender">
                                        <option value="{{ $employees->gender }}">{{ $employees->gender }}</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-sm">
                                    <select class="form-select mb-3" id="civil" name="civil">
                                        <option value="{{ $employees->civil }}">{{ $employees->civil }}</option>
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
                                        <input type="text" name="position" class="form-control"
                                            value="{{ $employees->position }}" />
                                        <label class="form-label">Position</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3" id="worktype" name="worktype">
                                        <option value="{{ $employees->worktype }}">{{ $employees->worktype }}</option>
                                        <option value="intern">Intern</option>
                                        <option value="permenet">Permenet</option>
                                    </select>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="emname" class="form-control"
                                            value="{{ $employees->emname }}" />
                                        <label class="form-label" for="form8Example3">Emergency Contact Name</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" name="emcontact" class="form-control"
                                            value="{{ $employees->emcontact }}" />
                                        <label class="form-label" for="form8Example4">Emergency Contact Number</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $employees->email }}" />
                                        <label class="form-label" for="form8Example5">Email address</label>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col">
                                    <input class="form-control" type="text" disabled />
                                        <label class="form-label" for="formControlDisabled">Fixed</label>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input class="form-control" type="text" disabled />
                                        <label class="form-label" for="formControlDisabled">Fixed</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input class="form-control" type="text" placeholder="Disabled input"
                                            aria-label="disabled input example" disabled />
                                        <label class="form-label"
                                            for="formControlDisabled">{{ $employees->empId }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </div>
        </div>
        <form />
    @endsection
