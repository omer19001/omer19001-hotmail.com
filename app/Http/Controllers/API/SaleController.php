<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\client_credit_driver_product as sale;
use Validator;
use App\Http\Resources\sale as saleResource;
   
class SaleController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = sale::all();
    
        return $this->sendResponse(saleResource::collection($sales), 'sale retrieved successfully.');
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
   
        
       
         $sale=sale::create($input);
        
         
   
        return $this->sendResponse(new saleResource($sale), 'sale created successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = sale::find($id);
  
        if (is_null($sale)) {
            return $this->sendError('sale not found.');
        }
   
        return $this->sendResponse(new saleResource($sale), 'sale retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sale $sale)
    {
        $input = $request->all();
   
         
       
         
         
               
                $sal=$sale->update($input);
              
      
        return $this->sendResponse(new saleResource($sal), 'sale updated successfully.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(sale $sale)
    {
        $sale->delete();
   
        return $this->sendResponse([], 'sale deleted successfully.');
    }
}