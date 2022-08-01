<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Holiday;

class ERPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //     $posts = Holiday::all();
    //     print_r($posts);die;
    //     return view ('holiday')->with('posts', $posts);
    // }

    public function holiday(){

        $posts = Holiday::all();
        return view ('holiday')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $request->validate([
            //'no'=>'required',
            //'month'=>'required',
            'date'=>'required',
            //'dayweek'=>'required',
            'holiday'=>'required',
            'holidaytype'=>'required',
        ]);

         $date=$request->input('date');
         $newdate = date("Y-m-d", strtotime($date));
         $res=new Holiday;
         $res->no=$request->input('no');
         $res->month=$request->input('month');
         $res->date=$newdate;
         $res->day_of_the_week=$request->input('dayweek');
         $res->holiday=$request->input('holiday');
         $res->holiday_type=$request->input('holidaytype');
         $res->save();
      return redirect('holiday');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  public function destroy($id)
    //  {
            
    //  }

    public function edit($id){
        $holiday = Holiday::find($id);
  
        return view('editholiday')->with('holiday',$holiday);
     }
  
     public function update(Request $request,$id){
        $data = $request->except('_method','_token','submit');
        // $holiday = Holiday::find($id);
        $arr['date'] = $data['date'];
        $arr['holiday'] = $data['holiday'];
        $arr['holiday_type'] = $data['holidaytype'];
        $holiday = Holiday::where('id', '=', $data['id'])->update($arr);
        if($holiday){
  
           Session::flash('message', 'Update successfully!');
           Session::flash('alert-class', 'alert-success');
           return redirect('holiday');
        }else{
           Session::flash('message', 'Data not updated!');
           Session::flash('alert-class', 'alert-danger');
        }
  
        return Back()->withInput();
     }
  
     // Delete
     public function destroy($id){
        holiday::destroy($id);
  
        Session::flash('message', 'Delete successfully!');
        Session::flash('alert-class', 'alert-success');
        return redirect('holiday');
     }
    }

