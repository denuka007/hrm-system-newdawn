@extends('employee.emp_master')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">My Messages</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="d-flex justify-content-center">Message</th>
                            <th scope="col">Time</th>
                            <th scope="col">
                                <a href="{{route('emp.clearall')}}" class="btn btn-warning btn-sm">Clear All</a>
                            </th>
                          </tr>
                        </thead>
                        @foreach ($msg as $msgs)
                        <tbody>
                            <tr>
                              <th scope="row">{{$msgs->id}}</th>
                              <td>
                                <div class="alert alert-{{ $msgs->type == 0 ? 'primary' : ($msgs->type == 1 ? 'danger' : 'success') }} ms-4 me-4 d-flex justify-content-center" role="alert">{{$msgs->msg}}</div>
                              </td>
                              <td>{{$msgs->created_at->diffForHumans()}}</td>
                              <td>
                                <button type="button" class="btn btn-link btn-danger btn-sm px-3" data-ripple-color="dark">
                                    <i class="fas fa-times"></i>
                                  </button>
                              </td>
                            </tr>
                          </tbody>
                        @endforeach
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
