@extends('layouts.app')

@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">اضافة عميل</h1>
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
                                    <form method="POST"  action="{{route('client.insert')}}" enctype="multipart/form-data"  >
                                        @method('POST')
                                        @csrf
                                        <div class="form-group">
                                            <label>الاسم</label>
                                            <input name='name' class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>اسم المستخدم</label>
                                            <input name='username' class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>كلمة المرور</label>
                                            <input name='password' class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>رقم الجوال</label>
                                            <input name='phone_number' class="form-control">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>صوره</label>
                                            <input type='file'   class="form-control" name='image'>
                                            
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
