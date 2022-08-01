@extends('layout')
@section('content')
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

<h1>User Profile</h1>
<table> 

<tr><td>Name</td>
<td>E-mail</td>
<td>DOB</td>
<td>Adhar</td>
<td>City</td>
<td>state</td>
<td>country</td>
<td>mobile</td>
<td>address</td>
<td>Permant</td>
<td>marital status</td>
<td>gender</td>
<td>education</td>
<td>year</td>
<td>Action</td>

</tr>
@foreach($data as $d)
<tr>
    <td>{{$d->name}}</td>
    <td>{{$d->email}}</td>
    <td>{{$d->dob}}</td>
    <td>{{$d->adhar}}</td>
    <td>{{$d->city}}</td>
    <td>{{$d->state}}</td>
    <td>{{$d->country}}</td>
    <td>{{$d->mobile}}</td>
    <td>{{$d->address}}</td>
    <td>{{$d->permant_address}}</td>
    <td>{{$d->marital_status}}</td>
    <td>{{$d->gender}}</td>
    <td>{{$d->education}}</td>
    <td>{{$d->year}}</td>

</tr>
@endforeach
</table>
</body>
</html>


@endsection