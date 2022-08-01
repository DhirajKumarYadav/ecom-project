@extends('layout')
@section('content')
<center>
<div class ="vdetails">
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <h1> <strong>User:</strong>
                {{ $leave->user }}</h1>
            </div>
        </div>
</div><br>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <h1> <strong>User_name:</strong>
                {{ $leave->user_name }}</h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
               <h1> <strong>Leave-Type:</strong>
                {{ $leave->ltype }}</h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h1> <strong>Starting_date:</strong>
                {{ $leave->sdate }}</h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h1> <strong>End_date:</strong>
                {{ $leave->edate }}</h1>
            </div>
        </div>
</div><br>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <h1> <strong>Reason:</strong>
                {{ $leave->reason }}</h1>
            </div>
        </div>
        </div><br>
        <!-- <button type="button" class="btn btn-secondary" value="approved" name="action">Approved</button>
        <button type="button" class="btn btn-secondary" value="disapproved" name="action">Not Approved</button>
        <button type="button" class="btn btn-secondary" value="hold" name="action">Hold</button> -->
        <form action="{{url('adaction')}}" method="post">
            @csrf
     <h1>   Action:<select name="action" >
          <option value="approved">Approved</option>
          <option value="rejected">Not approved</option>
          <option value="on hold">Hold</option>
          </select>
          <input type="hidden" name="id" value="{{ request()->route('id') }}">
          <input type="hidden" name="user" value="{{ $leave->user}}">
          <!-- <button type="button" class="btn btn-secondary" value="Submit"><a href="admin">Submit</a></button>  -->
          <!-- <a href="admin">Submit</a> -->
          <input type="submit" value="Submit" ></h1>
</form>
</div>
</center>
@endsection