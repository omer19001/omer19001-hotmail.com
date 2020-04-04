@extends('layouts.app')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">اضافة منتج</h1>
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
                                    <form method="POST"  action="{{route('product.insert')}}" enctype="multipart/form-data"  >
                                        @method('POST')
                                        @csrf
                                        <div class="form-group">
                                            <label>اسم المنتج</label>
                                            <input name='name' class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>السعر</label>
                                            <input name='price' class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>price offer</label>
                                            <input name='offer' class="form-control">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>صور المنتج</label>
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
