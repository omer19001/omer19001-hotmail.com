@extends('layouts.app')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">تعديل منتج</h1>
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
                                    <form method="POST"  action="{{route('product.update',$product->id)}}"   enctype="multipart/form-data">
                                        @method('POST')
                                        @csrf
                                        <div class="form-group">
                                            <label>اسم المنتج</label>
                                            <input name='name' value="{{$product->name}}" class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>السعر</label>
                                            <input name='price' value="{{$product->price}}" class="form-control">
                                            
                                        </div>
                                         
                                         
                                        <div class="form-group">
                                            <label>صور المنتج</label><br>
                                            <td>@if(json_decode($product->image)!=null) @foreach(json_decode($product->image) as $image)<img src="{{asset('images/products/'.$image)}}" alt="" style="height:100px;width:100px;"> @endforeach @endif</td>
                                            <input type="file" name="filename[]" multiple class="form-control">
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
