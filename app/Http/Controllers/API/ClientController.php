<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\client;
use Validator;
use App\Http\Resources\client as clientResource;
   
class ClientController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = client::all();
    
        return $this->sendResponse(clientResource::collection($clients), 'clients retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        if($request->hasfile('image'))
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/client'), $imageName);
 
        }else
        $imageName=null;
       
        $client=  client::create([
           'name'=>$request->name ,
           'phone_number'=>$request->phone_number,
           'username'=>$request->username,
           'balance'=>$request->balance,
           'password'=>bcrypt($request->password),
           'image'=>$imageName,
       ]);
        
         
   
        return $this->sendResponse(new clientResource($client), 'client created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = client::find($id);
  
        if (is_null($client)) {
            return $this->sendError('client not found.');
        }
   
        return $this->sendResponse(new clientResource($client), 'client retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        $input = $request->all();
   
         
       
        if($request->hasfile('image'))
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/client'), $imageName);
 
        }else
        $imageName=$client->image;
         
               
              $client->name=$request->name;
              $client->phone_number=$request->phone_number;
              $client->username=$request->username;
              $client->password=bcrypt($request->password);
              $client->image=$imageName ;
              
       $client->save();
        return $this->sendResponse(new clientResource($client), 'client updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        $client->delete();
   
        return $this->sendResponse([], 'client deleted successfully.');
    }
}