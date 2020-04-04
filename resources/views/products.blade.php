@extends('layouts.app')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">المنتجات</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <div  style="margin-bottom: 9px;">     <a href="{{route('product.add')}}" class="btn btn-success  ">اضافة منتج</a></div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                     
                                        <tr>
                                            <th>الاسم </th>
                                            <th>السعر</th>
                                            <th>سعر عرض</th>
                                            <th>صور المنتج</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr class="odd gradeX">
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->offer_price}}</td>
                                            <td>@if(json_decode($product->image)!=null) @foreach(json_decode($product->image) as $image)<img src="{{asset('images/products/'.$image)}}" alt="" style="height:100px;width:100px;"> @endforeach @endif</td>
                                            <td><a href="{{route('product.remove',$product->id)}}" class="btn btn-danger">حذف</a><a href="{{route('product.edit',$product->id)}}" class="btn btn-info mr-9 ">تعديل</a></td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                             
                    </div>
@endsection
