@extends('adminn.admin_master')

@section('content')
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
                @csrf
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Manage Rates</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borderless table-primary">
                          <tbody>
                            @foreach ($basic as $basic)
                            <tr>
                                <th scope="row">#</th>
                                <td>
                                  {{$basic->position}}
                                </td>
                                <td>
                                    {{$basic->basic}}
                                </td>
                                <td>
                                  Advance Limit: Rs. {{$basic->advancelimit}}
                                </td>
                              </tr>
                            @endforeach
                              <tr>
                                <th scope="row"></th>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-rounded btn-sm">Update</button>
                                </td>
                              </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
