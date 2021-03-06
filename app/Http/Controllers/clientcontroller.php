<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use users;

class clientcontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       
        return view('client')->with('clients',client::all());
    }
    public function add( )
    {
        return view('client.add');
    }

    public function insert(  )
    {
        if(request()->hasfile('image'))
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/client'), $imageName);
        }else
        $imageName=null;
        
      
             
        
       client::create([
           'name'=>request()->name,
           'phone_number'=>request()->phone_number,
           'username'=>request()->username,
           'password'=>request()->password,
           'image'=>$imageName,
       ]);
       return redirect(route('client.show'));
    }
    public function del($id)
    {
     $client=client::find($id);
     $client->delete();
       return view('client')->with('clients',client::all());

    }
    public function edit( $id)
    {
       return view('client.edit')->with('client',client::find($id));
    }
    public function update($id,Request $request)
    {
       
        if($request->hasfile('image'))
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/client'), $imageName);
 
        }else
        $imageName=client::find($id)->image;
         
              $client=client::find($id);
              $client->name=$request->name;
              $client->phone_number=$request->phone_number;
              $client->username=$request->username;
              $client->password=$request->password;
              $client->image=$imageName ;
              
       $client->save();
       return view('client')->with('clients',client::all());
    }
}
