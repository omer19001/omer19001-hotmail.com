<?php

namespace App\Http\Controllers;
use App\driver;
use Illuminate\Http\Request;

class drivercontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        return view('driver')->with('drivers', driver::all());
    }
    public function add( )
    {
        return view('driver.add');
    }

    public function insert(Request $request )
    {
         
           
        if($request->hasfile('image'))
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/driver'), $imageName);;
 
        }else
        $imageName=null;   
         

       driver::create([
           'name'=>$request->name,
           'phone_number'=>$request->phone_number,
           'username'=>$request->username,
           'password'=>$request->password,
           'image'=> $imageName,
       ]);
       return redirect(route('driver.show'));
    }
    public function del($id)
    {
     $driver=driver::find($id);
     $driver->delete();
       return view('driver')->with('drivers',driver::all());

    }
    public function edit( $id)
    {
       return view('driver.edit')->with('driver',driver::find($id));
    }
    public function update($id,Request $request)
    {
        if($request->hasfile('image'))
        {
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/driver'), $imageName);
 
        }else
        $imageName=driver::find($id)->image;
              $driver=driver::find($id);
              $driver->name=$request->name;
              $driver->phone_number=$request->phone_number;
              $driver->username=$request->username;
              $driver->password=$request->password;
              $driver->image=$imageName;
       $driver->save();
       return view('driver')->with('drivers',driver::all());
    }
}
