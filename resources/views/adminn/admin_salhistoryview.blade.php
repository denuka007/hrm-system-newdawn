@extends('adminn.admin_master')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Empty card</h5>
            </div>
            <div class="card-body">
                <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Basic</th>
                        <th scope="col">Total Salery</th>
                        <th scope="col">Invoice</th>
                        <th scope="col">All Info</th>
                      </tr>
                    </thead>
                    @foreach ($data as $sal)
                    <tbody>
                      <tr>
                        <th scope="row">{{$sal->empId}}</td>
                        <td>Rs. {{$sal->basic}}</td>
                        <td>Rs. {{$sal->finalsal}}</td>
                        <td>
                            <a href="{{route('admin.singlesalview', $sal->empId)}}" class="btn btn-primary btn-rounded btn-sm">Invoice</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-info btn-rounded btn-sm">View</a>

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
