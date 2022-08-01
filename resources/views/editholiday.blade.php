@extends('layout')
@section('content')

<form action="{{url('updateholiday')}}/{{$holiday->id}}" method="post" >
<!-- <form action ="store" method="POST"> -->
@csrf

<div class="choliday">

  <div>
  <!--<label for="formGroupExampleInput">Month</label>
    <input type="text" value ="{{$holiday->month}}" name ="month" class="form-control" id="formGroupExampleInput" placeholder="Enter Month">
  </div>
  <br>-->
  <input type="hidden" name="id" value="{{$holiday->id}}">
  <div>
  <label for="formGroupExampleInput">Date</label>
    <input type="date" value ="{{$holiday->date}}" name ="date" class="form-control" id="formGroupExampleInput" placeholder="Enter Date">
  </div>
<!--<div>
   <label for="formGroupExampleInput">Day of Week</label>
    <input type="text" value ="{{$holiday->day_of_the_week}}" name ="dayweek" class="form-control" id="formGroupExampleInput" placeholder="Enter Week">
  </div>-->
  <div>
   <label for="formGroupExampleInput">Holiday</label>
    <input type="text" value ="{{$holiday->holiday}}" name ="holiday" class="form-control" id="formGroupExampleInput" placeholder="Enter Holiday">
  </div>
  <div>
  <label for="formGroupExampleInput">Holiday Type</label>
    <input type="text" value ="{{$holiday->holiday_type}}"name ="holidaytype" class="form-control" id="formGroupExampleInput" placeholder="Enter Holiday Type">
  </div>
  <br>
  
  <input type  = "submit" name= "btnsubmit" value="submit">
</div>
</form>
@endsection
