@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Empty card</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered table-info">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Reason</th>
                        <th scope="col">StarCount</th>
                      </tr>
                    </thead>
                    @foreach ($history as $history)
                    <tbody>
                        <tr>
                          <th scope="row">{{$history->empId}}</th>
                          <td>{{$history->month}}</td>
                          <td>{{$history->reason}}</td>
                          <td>{{$history->staradd}}</td>
                        </tr>
                      </tbody>
                    @endforeach
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
