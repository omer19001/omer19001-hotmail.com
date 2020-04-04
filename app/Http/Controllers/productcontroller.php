<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
class productcontroller extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
        return view('products')->with('products', product::all());
    }
    public function add( )
    {
        return view('product.add');
    }

    public function insert(Request $request )
    {
         
           
        if($request->hasfile('filename'))
        {

           foreach($request->file('filename') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/images/products', $name);  
               $data[] = $name;  
           }
        }
        else
        $data=null;
         
             
         

        product::create([
           'name'=>$request->name,
           'price'=>$request->price,
           'offer_price'=>$request->offer,
            'image'=>json_encode($data),
       ]);
       return redirect(route('product.show'));
    }
    public function del($id)
    {
     $product=product::find($id);
     $product->delete();
       return view('products')->with('products',product::all());

    }
    public function edit( $id)
    {
       return view('product.edit')->with('product',product::find($id));
    }
    public function update($id,Request $request)
    {
       
        if($request->hasfile('filename'))
        {

           foreach($request->file('filename') as $image)
           {
               $name=$image->getClientOriginalName();
               $image->move(public_path().'/images/products', $name);  
               $data[] = $name;  
           }
        }
      
        
         
              $product=product::find($id);
              $product->name=$request->name;
              $product->price=$request->price;
              $product->offer_price=$request->offer_price;
              if($request->hasfile('filename'))
              $product->image=json_encode($data);
       $product->save();
       return redirect(route('product.show'));
    }
}
