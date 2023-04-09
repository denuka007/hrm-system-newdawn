@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Select Employee</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($emps as $emps)
                    <div class="col-4">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <div class="d-flex text-black">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('assets/uploads/' . $emps->propic) }}"
                                            alt="Generic placeholder image" class="img-fluid"
                                            style="width: 100px; border-radius: 10px;">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h4 class="mb-1">{{$emps->name}}</h4>
                                        <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$emps->position}}</p>
                                        <div class="d-flex pt-1">
                                            <button type="button"
                                                class="btn btn-outline-primary btn-sm me-1 flex-grow-1">View</button>
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
</div>
@endsection
