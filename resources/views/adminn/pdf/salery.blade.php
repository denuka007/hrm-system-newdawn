<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
</head>
<body>

<h2>This Month Salery Report</h2>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Date</th>
    <th>Total Salery</th>
  </tr>
  @foreach ($sals as $sals)

            <tr>
              <th scope="row">{{$sals->empId}}</th>
              <td>{{$sals->name}}</td>
              <td>{{$sals->date}}</td>
              <td>Rs. {{$sals->finalsal}}</td>
            </tr>

 @endforeach
</table>

</body>
</html>
