@extends('managerr.manager_master')

@section('content')

@foreach ($view as $views)
<div class="card mb-3" style="border-radius: .5rem;">
    <div class="row g-0">
        <div class="col-md-4 gradient-custom text-center text-white"
            style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            <img src="{{ asset('assets/uploads/' . $views->propic) }}"
                alt="Avatar" class="img-fluid my-5" style="width: 100px;" />
            <h5>{{ $views->name }}</h5>
            <button class="btn btn-success btn-rounded btn-sm">Attendance</button>
            <button class="btn btn-primary btn-rounded btn-sm">Payments</button>
        </div>
        <div class="col-md-8">
            <div class="card-body p-4">
                <h6>Personal Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Email</h6>
                        <p class="text-muted">{{ $views->email }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Phone</h6>
                        <p class="text-muted">{{ $views->mobile }}</p>
                    </div>
                </div>
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>NIC</h6>
                        <p class="text-muted">{{ $views->nic }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Age</h6>
                        <p class="text-muted">{{ $views->age }}</p>
                    </div>
                </div>
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Gender</h6>
                        <p class="text-muted">{{ $views->gender }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Civil Status</h6>
                        <p class="text-muted">{{ $views->civil }}</p>
                    </div>
                </div>
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Living Address</h6>
                        <p class="text-muted">{{ $views->address }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Qualifications</h6>
                        <p class="text-muted">{{ $views->qualification }}</p>
                    </div>
                </div>
                <h6>Company details</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Employee ID</h6>
                        <p class="text-muted">{{ $views->empId }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Position of Company</h6>
                        <p class="text-muted">{{ $views->position }}</p>
                    </div>
                </div>
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Work Type</h6>
                        <p class="text-muted">{{ $views->worktype }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>work Status</h6>
                        <p class="text-muted">{{ $views->workstatus }}</p>
                    </div>
                </div>
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                        <h6>Emergency Contactor Name</h6>
                        <p class="text-muted">{{ $views->emname }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>Emergency Contactor Number</h6>
                        <p class="text-muted">{{ $views->emcontact }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
