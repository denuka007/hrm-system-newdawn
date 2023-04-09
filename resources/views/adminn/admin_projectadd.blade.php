@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Add Project Here</h5>
            </div>
            <div class="card-body">
                <form action="{{route('admin.projectdone')}}" method="post">
                    @csrf
                    <div class="row mb-4">
                      <div class="col">
                            <select class="form-select mb-3" id="client" name="client">
                                @foreach ($data as $data)
                                <option value="null">Choose Client</option>
                                <option value="{{$data->clientId}}">{{$data->name}}</option>
                                @endforeach
                            </select>
                      </div>
                      <div class="col">
                        <div class="form-outline">
                          <input type="text" id="id" name="id" class="form-control" />
                          <label class="form-label" for="form3Example2">Project ID</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="title" name="title" class="form-control" />
                      <label class="form-label" for="form3Example4">Enter Title</label>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                          <div class="form-outline">
                            <input type="number" id="qty" name="qty" class="form-control" />
                            <label class="form-label" for="form3Example1">Quantitiy</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-outline">
                            <input type="date" id="date" name="date" class="form-control" />
                            <label class="form-label" for="form3Example2">Pick DueDate</label>
                          </div>
                        </div>
                      </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 btn-sm">ADD</button>

                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
