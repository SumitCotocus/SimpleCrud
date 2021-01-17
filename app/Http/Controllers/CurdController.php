<?php

namespace App\Http\Controllers;

use App\curd;
use Illuminate\Http\Request;
use DB;

class CurdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userlists = curd::all();
        return view('list',compact('userlists'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $file=$request->file("image");
      if($request->hasFile("image"))
      {
       $file->move("upload/",$file->getClientOriginalName());
      }
      else
      {
        $request->session()->flash('msg','Empty Data');
      }
      
      
      

        $res=new Curd;
         $res->name=$request->input('name');
         $res->email=$request->input('email');
         $res->subject=$request->input('subject');
         $res->message=$request->input('message');
         $res->image=$file->getClientOriginalName();
         $res->save();
         
         $request->session()->flash('msg','Data Submitted Successfully');
         return redirect('list');

    }

    
    public function show(curd $curd)
    {
        
        $curds = curd::all();
        return view('list',compact('curds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\curd  $curd
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curds = curd::find($id);
     return view('edit',compact('curds','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\curd  $curd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'message'=>'required',
          ]);
          $curds = curd::where('id', '=', $id)->first();
          $curds->update($request->all());
          return redirect('/list');
    }

   
    public function destroy($id)
    {
        $curds = curd::find($id);
        $curds->delete();
         return redirect('/list');
    }
}
