<?php

namespace App\Http\Controllers;
use App\sale;
use App\client_credit_driver_product;
use App\product;
use App\driver;
use App\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class salecontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $sales = DB::table('client_credit_driver_product')
        ->join('clients', 'clients.id', '=', 'client_credit_driver_product.client_id')
        ->join('drivers', 'drivers.id', '=', 'client_credit_driver_product.driver_id')
        ->join('products', 'products.id', '=', 'client_credit_driver_product.product_id')
        ->select('client_credit_driver_product.*','clients.name as client_name' ,'drivers.name as driver_name','products.name as product_name')
        ->paginate(15);
        return view('sales')->with('sales', $sales);
    }
    public function add( )
    {
        return view('sale.add')->with('products',product::all())->with('drivers',driver::all())->with('clients',client::all());
    }

    public function insert(Request $request )
    {
         
           
         
             
         

        client_credit_driver_product::create([
           'client_id'=>$request->client_id,
           'driver_id'=>$request->driver_id,
           'product_id'=>$request->product_id,
           'delivery_location'=>$request->delivery_location,
           'qunatity'=>$request->quantity,
           'total'=>product::find($request->product_id)->price*$request->quantity,
       ]);
       return redirect('sales');
    }
    public function del($id)
    {
     $sale=client_credit_driver_product::find($id);
     $sale->delete();
       return view('sales')->with('sales',client_credit_driver_product::all());

    }
    public function edit( $id)
    {
       return view('sale.edit')->with('sale',client_credit_driver_product::find($id));
    }
    public function update($id,Request $request)
    {
       
     
             
         
              $sale=client_credit_driver_product::find($id);
              $sale->update( [
                'client_id'=>$request->client_id,
                'driver_id'=>$request->driver_id,
                'product_id'=>$request->product_id,
                'delivery_location'=>$request->delivery_location,
                'qunatity'=>$request->quantity,
                'total'=>product::find($request->product_id)->price*$request->quantity,
            ]);
       return view('sales')->with('sales',client_credit_driver_product::all());
    }
}
