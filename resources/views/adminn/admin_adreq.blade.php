@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Current Advance Requests</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Position</th>
                        <th scope="col">Request Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    @foreach ($ad as $ad)
                    <tbody>
                        <tr>
                          <th scope="row">{{$ad->empId}}</th>
                          <td>{{$ad->position}}</td>
                          <td>{{$ad->month}}</td>
                          <td>{{$ad->status}}</td>
                          <td>
                            <a href="{{route('admin.adaccept', $ad->id)}}" class="btn btn-primary btn-sm">Accept</a>
                            <a href="{{route('admin.adreject', $ad->id)}}" class="btn btn-danger btn-sm">Reject</a>
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
