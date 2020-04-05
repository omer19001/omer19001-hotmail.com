@extends('layouts.app')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">اضافة بيع</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-7 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form method="POST"  action="{{route('sale.insert')}}"  >
                                        @method('POST')
                                        @csrf
                                        <div class="form-group">
                                            <label>اسم المنتج</label>
                                            <select name="product_id" id="" class="form-control">
                                            @foreach($products as $product)
                                            <option  value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>اسم السواق</label>
                                            <select name="driver_id" id="" class="form-control">
                                            @foreach($drivers as $driver)
                                            <option   value="{{$driver->id}}">{{$driver->name}}</option>
                                        @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>الزبون</label>
                                            <select name="client_id" id="" class="form-control">
                                            @foreach($clients as $client)
                                            <option   value="{{$client->id}}">{{$client->name}}</option>
                                        @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="form-group">
                                        <label>موقع التوصيل</label>
                                          <input type="text" name="delivery_location" class="form-control" required>
                                            
                                        </div>
                                        <div class="form-group">
                                        <label>الكمية</label>
                                          <input type="number" name="quantity" class="form-control" required>
                                            
                                        </div>
                                      
                                        <button type="submit" class="btn btn-success">حفظ</button>
                                         
                                    </form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
                                         
                 




@endsection
