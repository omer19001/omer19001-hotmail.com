@extends('layouts.app')

@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">المبيعات</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                <div  style="margin-bottom: 9px;">     <a href="{{route('sale.add')}}" class="btn btn-success  ">اضافة منتج</a></div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                     
                                        <tr>
                                            <th>اسم المنتج </th>
                                            <th>الزبون</th>
                                            <th>السائق</th>
                                            <th>مكان التوصيل</th>
                                            <th>تاريخ الشراء</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($sales as $sale)
                                        <tr class="odd gradeX">
                                            <td>{{$sale->product_name}}</td>
                                            <td>{{$sale->client_name}}</td>
                                            <td>{{$sale->driver_name}}</td>
                                            <td> {{$sale->delivery_location}}  </td>
                                            <td> {{$sale->created_at}}  </td>
                                             
                                        </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                             
                    </div>
@endsection
