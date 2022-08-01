@extends('layout')
@section('content')

<form action ="store" method="POST">
@csrf
<div class="choliday">
 <!-- <div class="form-group">
    <label for="formGroupExampleInput">No</label>
    <input type="text" name ="no" class="form-control" id="formGroupExampleInput" placeholder="Enter Number">
  </div>
  <br>-->
  <!--<div>
  <label for="formGroupExampleInput">Month </label>
    <input type="text" name ="month" class="form-control" id="formGroupExampleInput" placeholder="Enter Month">
  </div>
  <br>-->
  <div>
  <label for="formGroupExampleInput">Date</label>
    <input type="date" name ="date" class="form-control" id="formGroupExampleInput" placeholder="Enter Date">
  </div>
<!--<div>
   <label for="formGroupExampleInput">Day of Week</label>
    <input type="text" name ="dayweek" class="form-control" id="formGroupExampleInput" placeholder="Enter Week">
  </div>-->
  <div>
   <label for="formGroupExampleInput">Holiday</label>
    <input type="text" name ="holiday" class="form-control" id="formGroupExampleInput" placeholder="Enter Holiday">
  </div>
  <div>
  <label for="formGroupExampleInput">Holiday Type</label>
    <input type="text" name ="holidaytype" class="form-control" id="formGroupExampleInput" placeholder="Enter Holiday Type">
  </div>
  <br>
  
  <input type  = "submit" name= "btnsubmit" value="submit">
</div>
</form>

@endsection