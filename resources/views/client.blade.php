@extends('layouts.app')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">العملاء</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div style="margin-bottom: 10px;">
                    <a href="{{route('client.add')}}" class="btn btn-success  ">اضافة عميل</a></div>
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
                                            <th>اسم المستخدم</th>
                                            <th>رقم الجول</th>
                                            <th>الصوره</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        <tr class="odd gradeX">
                                            <td>{{$client->name}}</td>
                                            <td>{{$client->username}}</td>
                                            <td>{{$client->phone_number}}</td>
                                            <td ><img src="{{asset('images/client/'.$client->image)}}" alt="" style="height:100px;width:100px;"> </td>
                                             <td><a href="{{route('client.remove',$client->id)}}" class="btn btn-danger">حذف</a><a href="{{route('client.edit',$client->id)}}" class="btn btn-info mr-9 ">تعديل</a></td>
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                             
                    </div>
@endsection
