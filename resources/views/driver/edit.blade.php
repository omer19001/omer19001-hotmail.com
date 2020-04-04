@extends('layouts.app')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">تعديل</h1>
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
                                    <form method="POST"  action="{{route('driver.update',$driver->id)}}" enctype="multipart/form-data" >
                                        @method('POST')
                                        @csrf
                                        <div class="form-group">
                                            <label>الاسم</label>
                                            <input name='name' value="{{$driver->name}}" class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>اسم المستخدم</label>
                                            <input name='username' value="{{$driver->username}}" class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>كلمة المرور</label>
                                            <input name='password'  class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>رقم الجوال</label>
                                            <input name='phone_number' value="{{$driver->phone_number}}" class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>صوره</label>
                                            <br>
                                            <img src="{{asset('images/driver/'.$driver->image)}}" alt="" style="height:100px;width:100px;">
                                            <input type="file" name="image" id="" class="form-control">
                                            
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
