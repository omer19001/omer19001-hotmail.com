<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\driver;
use Validator;
use App\Http\Resources\driver as driverResource;
   
class DriverController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = driver::all();
    
        return $this->sendResponse(driverResource::collection($clients), 'drivers retrieved successfully.');
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
            request()->image->move(public_path('images/driver'), $imageName);
 
        }else
        $imageName=null;
       
        $driver=  driver::create([
           'name'=>$request->name ,
           'phone_number'=>$request->phone_number,
           'username'=>$request->username,
           'balance'=>$request->balance,
           'password'=>bcrypt($request->password),
           'image'=>$imageName,
       ]);
        
         
   
        return $this->sendResponse(new driverResource($driver), 'driver created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $driver = driver::find($id);
  
        if (is_null($driver)) {
            return $this->sendError('client not found.');
        }
   
        return $this->sendResponse(new driverResource($driver), 'driver retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, driver $driver)
    {
        $input = $request->all();
   
         
       
        if($request->hasfile('image'))
        {
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/driver'), $imageName);
 
        }else
        $imageName=$driver->image;
         
               
              $driver->name=$request->name;
              $driver->phone_number=$request->phone_number;
              $driver->username=$request->username;
              $driver->password=bcrypt($request->password);
              $driver->image=$imageName ;
              
       $driver->save();
        return $this->sendResponse(new driverResource($driver), 'driver updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(driver $driver)
    {
        $driver->delete();
   
        return $this->sendResponse([], 'driver deleted successfully.');
    }
}