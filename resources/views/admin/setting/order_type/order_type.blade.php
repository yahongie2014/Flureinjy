@extends('layout.home')
@section('content')



    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="text-dark pl25 fw700 fs35">
                {{trans('admin.order')}}
            </div>
            <div class="panel-menu allcp-form theme-primary mtn">

                <div class="row">
                    <div class="col-md-6 ">
                        <a href="{{url('add_order_type')}}" class="btn btn-info br2 btn-lg"> <i class="fa fa-plus"></i> {{trans('admin.add_order_type')}}</a>
                    </div>
                </div>
            </div>
            <div class="panel-body pn">
                <div class="table-responsive">
                    <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                        <thead>
                        <tr class="bg-light">
                            <th class="text-center">{{trans('admin.order_type')}}</th>
                            <th class="text-center">{{trans('admin.available_option')}}</th>
                            <th class="text-center">{{trans('admin.show')}}</th>
                            <th class="text-center">{{trans('admin.edit')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="text-center">
                                    {{$order->order_type}}

                                </td>
                                <td class="text-center">
                                    {{$order->options}}

                                </td>
                                <td class="text-center">
                                    <a href="{{ url('order_type/show/'.$order->id)}}" class="btn btn-info br2 btn-m"> {{trans('admin.show')}}</a>

                                </td>
                                <td class="text-center">
                                    <a href="{{ url('order_type/edit/'.$order->id)}}" class="btn btn-info br2 btn-m"> {{trans('admin.edit')}}</a>

                                </td>
                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>



@stop