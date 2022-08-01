@extends('layout')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

<div class="row">
  <div class="column" style="background-color:black; border: 5px solid grey;">
  <style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
  <img src="home.jpeg" style="width:30%;"  class="center">
  

  <center>
 <justify><a href="layout"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Home</h2></a></justify>
  
</center>
  </div>
  @if(session('is_manager') =='1')
  <div class="column" style="background-color:black; border: 5px solid grey; ">
  <img src="users.jpeg" style="width:40% ; "  class="center">
  
<center>
 <a href="get"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>All User Profile</h2></a>
</center>
  </div>

  <div class="column" style="background-color:black; border: 5px solid grey; ">
  <img src="adduser.jpeg" style="width:30% ;"  class="center">
  
  <center>
 <a href="add"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Add User</h2></a>
</center>
  </div>
  @endif
  <div class="column" style="background-color:black; border: 5px solid grey; ">
  <img src="alluser.jpeg" style="width:30% ;"  class="center">
  
  <center>
 <a href="update"> <h2 class="text-primary"><i class="fa fa-user-edit me-2"></i>Update My Profile</h2></a>
</center>
  </div>
</div>

</body>
</html>
@endsection