<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\driver;
use App\product;
use App\client_credit_driver_product as sale;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with('clients',client::all())->with('drivers',driver::all())->with('products',product::all())->with('sales',sale::all());
    }
}
