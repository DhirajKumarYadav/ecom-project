@extends('layout')
@section('content')



<!DOCTYPE html>
@php
    $user_id = Session::get('user_id');

@endphp





    <form action="{{url('store-timesheet')}}" method="POST">
        @csrf
        <table class="table table-bordered table-dark" id="table">
            <thead>
              <tr>
                <th scope="col">User_id</th>
                <th scope="col">Date</th>
                <th scope="col">Start time</th>
                <th scope="col">End time</th> 
                <th scope="col">Regular Hours</th>
                <th scope="col">Over Time</th>
                <th scope="col">Total Hours</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" name="userid" value="{{$user_id}}" readonly></td>
                <th scope="row"><input type="Date" name="date"></th>
                <td><input type="time" name="start"></td>
                <td><input type="time" name="end"></td>
                <td><input type="text" name="regulartime"></td>
                <td><input type="text" name="overtime"></td>
                <td><input type="text"name="totalhours"></td>
              </tr>
      
            </tbody>

            <tbody>
              <tr>
                <td style="color: red">@error('userid')@enderror</td>
                <td style="color: red">@error('date'){{$message}}@enderror</td><br>
                <td style="color: red">@error('start'){{$message}}@enderror</td><br>
                <td style="color: red">@error('end'){{$message}}@enderror</td><br>
                <td style="color: red">@error('regulartime'){{$message}}@enderror</td><br>
                <td style="color: red">@error('overtime'){{$message}}@enderror</td><br>
                <td style="color: red">@error('totalhours'){{$message}}@enderror</td><br>


              </tr>
            </tbody>

              
          </table>
          {{-- <input type="submit" value="submit"> --}}
          <button type="submit" class="btn btn-secondary" >Submit</button>


      
    </form>
    <br><br> 
    <table id="myTables" class="table table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">User_id</th>
          <th scope="col">Date</th>
          <th scope="col">Start time</th>
          <th scope="col">End time</th> 
          <th scope="col">Regular Hours</th>
          <th scope="col">Over Time</th>
          <th scope="col">Total Hours</th>

        </tr>
      </thead>

      <tbody id = "myrow">
    
      </tbody>
    </table>
   
    

     <script>
        var ajax = new XMLHttpRequest();
        var method = "GET";
        var url = "get-timesheet";
        var asynchronous = true;
        ajax.open(method, url, asynchronous);
        ajax.send();
        ajax.onreadystatechange = function(){
            if(this.readyState===4 && this.status===200 ){
              let data = JSON.parse(this.responseText);
              console.log(data);  
              
              let x = document.getElementById("myrow");
          

              for(let i=0;i<data.length;i++){
                let tr = document.createElement('tr');
                let obj = data[i];
                for(const key in obj){
                if(key === "created_at" || key ==="updated_at" || key === "id"){
                  continue;
                }  
                let td = document.createElement('td');
                if(key === "regular"){
                
                td.textContent = obj[key];
                let temp = Number(td.textContent);
                if(temp<8){
                  td.style.backgroundColor = 'red';
                }
                tr.appendChild(td);
                }
                else{
                    td.textContent = obj[key];
                    tr.appendChild(td);
                }
                }
                x.appendChild(tr);

              }
            

            }
        }

      </script> 


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection
