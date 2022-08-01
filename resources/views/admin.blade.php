@extends('layout')
@section('content')

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USER-NAME</th>
      <th scope="col">USER-ID</th>
      <th scope="col">TYPE</th>
      <th scope="col">START-DATE</th>
      <th scope="col">END-DATE</th>
      <th scope="col">REASON</th>
      <th scope="col">ACTION</th>
      <th scope="col">STATUS</th>
    </tr>
  </thead>
  <tbody>
  @foreach($leaves as $leave)
    <tr>
      <td>{{$leave->id}}</td>
      <td>{{$leave->user_name}}</td>
      <td>{{$leave->user}}</td>
      <td>{{$leave->ltype}}</td>
      <td>{{$leave->sdate}}</td>
      <td>{{$leave->edate}}</td>
      <td>{{$leave->reason}}</td>
      <td>{{$leave->action}}</td>
      <td><a href="details/{{$leave->id}}">View Details</a></td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection