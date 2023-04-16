@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Empty card</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered table-light ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col" class="text-center">Action</th>
                      </tr>
                    </thead>
                    @foreach ($emps as $emps)
                    <tbody>
                      <tr>
                        <td>{{$emps->empId}}</td>
                        <td>{{$emps->name}}</td>
                        <td>{{$emps->position}}</td>
                        <form action="{{route('admin.prodctionadd', $emps->empId)}}" method="post">
                            @csrf
                        <td class="text-center">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio" id="radio" value="1" />
                            <label class="form-check-label" for="inlineRadio1">yes</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio" id="radio" value="0" />
                            <label class="form-check-label" for="inlineRadio2">no</label>
                          </div>
                          <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        </td>
                        </form>
                      </tr>
                    </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
