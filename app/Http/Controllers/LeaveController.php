<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use Illuminate\Support\Facades\Session;


class LeaveController extends Controller
{
  
    function saveleave(Request $req){
        
        $leave= New Leave;
        $leave->user=$req->user;
        $leave->user_name=$req->user_name;
        $leave->ltype=$req->ltype;
        $leave->sdate=$req->sdate;
        $leave->edate=$req->edate;
        $leave->reason=$req->reason;
        $leave->save();
        //Leave::create($req->all());
     
        return redirect('create')->with('message','Sending data successfully');
     }

     function show(){
        $data= Leave::all();
        return view('create',['leaves'=>$data]); 

    }

    
}


