@extends('managerr.manager_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Assign Employee For Work</h5>
                </div>
                @foreach ($employee as $emp)

                <div class="card-body">
                    <section style="background-color: #cedaf2;">
                        <form action="{{route('manager.assignbothdone', $emp->id)}}" method="post">
                            @csrf
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col col-lg-6 mb-4 mb-lg-0">
                                    <div class="card mb-3" style="border-radius: .5rem;">
                                        <div class="row g-0">
                                            <div class="col-md-4 gradient-custom text-center text-white"
                                                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                                <img src="{{ asset('assets/uploads/' . $emp->propic) }}"
                                                    alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                                <h5>{{$emp->name}}</h5>
                                                <i class="far fa-edit mb-5"></i>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card-body p-4">
                                                    <h6>Information</h6>
                                                    <hr class="mt-0 mb-4">
                                                    <div class="row pt-1">
                                                        <div class="col-6 mb-3">
                                                            <h6>Position</h6>
                                                            <p class="text-muted">{{$emp->position}}</p>
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <h6>Work Type</h6>
                                                            <p class="text-muted">{{$emp->worktype}}</p>
                                                        </div>
                                                    </div>
                                                    <h6>Assign</h6>
                                                    <hr class="mt-0 mb-4">
                                                    <div class="row pt-1">
                                                        <div class="col-6 mb-3">
                                                            <h6>Time Shift</h6>
                                                            <div class="col">
                                                                <select class="form-select mb-3" id="shiftid" name="shiftid">
                                                                    @foreach ($shift as $shifts)
                                                                    <option value="{{$shifts->shift_Id}}">{{$shifts->shift_Id}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <h6>Department</h6>
                                                            <div class="col">
                                                                <select class="form-select mb-3" id="depid" name="depid">
                                                                    @foreach ($department as $deps)
                                                                    <option value="{{$deps->depId}}">{{$deps->depId}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-start">
                                                        <button type="submit" class="btn btn-primary btn-rounded btn-sm">Assign</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </section>
                </div>

                @endforeach

            </div>
        </div>
    </div>
@endsection
