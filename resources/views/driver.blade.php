@extends('layouts.app')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">السواقين</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
           
                <div class="col-lg-12">
             <div  style="margin-bottom: 9px;">     <a href="{{route('driver.add')}}" class="btn btn-success  ">اضافة سائق</a></div>
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
                                            <th>رقم الجول</th>
                                            <th>الرصيد</th>
                                            <th>الصوره</th>
                                            <th> </th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($drivers as $driver)
                                        <tr class="odd gradeX">
                                            <td>{{$driver->name}}</td>
                                            <td>{{$driver->phone_number}}</td>
                                            <td>{{$driver->balance}}</td>
                                            <td><img src="{{asset('images/driver/'.$driver->image)}}" alt="" style="height:100px;width:100px;"> </td>
                                            <td><a href="{{route('driver.remove',$driver->id)}}" class="btn btn-danger">حذف</a><a href="{{route('driver.edit',$driver->id)}}" class="btn btn-info mr-9 ">تعديل</a></td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                             
                    </div>
@endsection
