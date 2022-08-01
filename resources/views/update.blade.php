@extends('layout')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <form action="{{ url('update')}}" method="post">
        @csrf
    <div class="container-fluid position-relative d-flex p-0">
       <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Update User</h3>
                            </a>
                            
                        </div>
                       
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" name="city" style="width:350px;background:black;" placeholder="enter city name">
                            <label>City</label>
                        </div>
                        
       <label for="state">State</label><br>
          <select id="state" class="form-control" name="state" style="width:350px;background:black;">
          <option value="karnataka">Karnataka</option>
          <option value="karnataka">Maharashtra</option>
          <option value="telangana">Telangana</option>
          <option value="haryana">Haryana</option>
          <option value="andhra pradesh">Andhra Pradesh</option>
        </select><br><br>

        <label for="country">Country</label>              
          <select id="country" class="form-control" name="country"  style="width:350px;background:black;">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="india">India</option>
          <label for="country">Country</label>
        </select><br><br>
              
          <label for="floatingPassword">Mobile Number</label>
           <input type="number" class="form-control" name="mobile" id="floatingPassword" placeholder="enter mobile number"><br><br>
                            
          <label for="address" required>Address</label><br>
            <textarea id="adress" class="form-control" name="address" name="address" placeholder="enter address" style="height:50px;width:350px;background:black"></textarea><br><br>
                        
           <label for="address">Permant Addresss</label><br>
              <textarea id="permant_address" class="form-control" name="permant_address" placeholder="enter your address" style="height:50px;width:350px;background:black"></textarea><br><br>
                       
           
          <label for="education">Education</label>              
          <select id="education" class="form-control" name="education" style="height:50px;width:350px;background:black" required>
          <option value="Electronics and Communication Engineering">Electronics And Communication Engineering</option>
          <option value="Mechanical Engineering">Mechanical Engineering</option>
          <option value="Civil Engineering">Civil Engineering</option>
          <option value="Computerscience Engineering">Computerscience Engineering</option>
          <option value="Aerospace Engineering">Aerospace Engineering</option>
        </select><br><br>
                            
        <label for="floatingText">Year</label>
        <input type="date" class="form-control" name="year" style="width:350px;background:black;">
        <br><br>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Update User</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>


</form>
</body>

</html>
@endsection