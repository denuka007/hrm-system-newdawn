@extends('managerr.manager_master')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Empty card</h5>
            </div>
            <div class="card-body">
                <form action="{{route('manager.depregister')}}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                      <input type="text" name="depid" class="form-control" />
                      <label class="form-label">Enter department ID</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name="name" class="form-control" />
                      <label class="form-label">Department Name</label>
                    </div>

                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn btn-primary btn-block">Add New Department</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
</div>


<div class="card flex-fill">
    <div class="card-header">

        <h5 class="card-title mb-0">Current Departments</h5>
    </div>
    <table class="table table-hover my-0">
        <thead>
            <tr>
                <th>Name</th>
                <th class="d-none d-xl-table-cell">Department ID</th>
                <th class="d-none d-xl-table-cell">Assign Employees</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Quality Check</td>
                <td class="d-none d-xl-table-cell">QA-01</td>
                <td class="d-none d-xl-table-cell">31</td>
                <td><span class="badge bg-success">Active</span></td>
            </tr>
            <tr>
                <td>Production</td>
                <td class="d-none d-xl-table-cell">PRO-02</td>
                <td class="d-none d-xl-table-cell">10</td>
                <td><span class="badge bg-danger">Close</span></td>

            </tr>
            <tr>
                <td>Project Hades</td>
                <td class="d-none d-xl-table-cell">01/01/2021</td>
                <td class="d-none d-xl-table-cell">31/06/2021</td>
                <td><span class="badge bg-success">Done</span></td>

            </tr>
            <tr>
                <td>Project Nitro</td>
                <td class="d-none d-xl-table-cell">01/01/2021</td>
                <td class="d-none d-xl-table-cell">31/06/2021</td>
                <td><span class="badge bg-warning">In progress</span></td>

            </tr>
        </tbody>
    </table>
</div>
@endsection
