<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Login;
use DB;


class LoginController extends Controller
{
    function _construct(){
        if(!Session::exists('user')) {
            die ("You are not authorized user.");
            
    }
}
  
    function saveleave(Request $req){
        if(Session::exists('user')) {

        $leave= New Leave;
        $leave->user=$req->user;
        $leave->user_name=$req->user_name;
        $leave->ltype=$req->ltype;
        $leave->sdate=$req->sdate;
        $leave->edate=$req->edate;
        $leave->reason=$req->reason;
        $leave->save();
        Leave::create($req->all());
     
        return redirect('admin')->with('message','Sending data successfully');
     }else {
        return view('not_authorized');
    }
}
     function show(){
        //\DB::enableQueryLog();
         $data=Leave::where('manager_id','=',Session::get('user_id'))->get();
         //dd(\DB::getQueryLog()); 
        return view('admin',['leaves'=>$data]); 

    }

    public function login(Request $request)
    //dd($request);
    {

        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

    //   $user =  Login::where('username','=',$request->username)->where('password','=',$request->password)->first();
    //  // dd($user);
    //   return redirect('admin');
    //     //echo "succefully logged";
    // }

    $user =  Login::where('username','=',$request->username)->where('password','=',$request->password)->first();
      if(!empty($user)){
        Session::put('user',$user);
        Session::put('user_id',$user->id);
        $is_manager_user = Leave::where('manager_id','=',$user->id)->count();
        Session::put('is_manager',$is_manager_user>0?true:false);
        return redirect('admin');

    } else{
        echo "wrong user name or password";
         }
    
    }

    public function loginUser()
     {
        return view('login');
     }

     public function User()
     {
        return view('admin');
     }
// for Admin view details

function viewDetails($id){
   $data =Leave::find($id);
   return view('view-details',['leave'=>$data]);

}

function adaction (Request $req){

        Leave::where('id', $req->id)->update(array('action' => $req->action));
        return redirect('admin')->with('message','Action Added');

} 
}



