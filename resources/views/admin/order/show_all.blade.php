@extends('layout.home')
@section('content')
    <script>

    </script>
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290" data-chute-height="match">
            {!! Form::open(['method'=>'get','url'=>'order_search'])!!}

            <!-- -------------- Menu Block -------------- -->
            <div class="allcp-form theme-primary">

                <h5 class="pln"> {{trans('admin.filter_orders')}}</h5>

                <h6 class="mb15"> {{trans('admin.by_id')}}</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="search_id" id="order-id" class="gui-input" placeholder="{{trans('admin.order_id')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-tag"></i>
                        </label>
                    </label>
                </div>

                <h6 class="mb15">{{trans('admin.by_price')}}</h6>

                <div class="section row mb20">
                    <div class="col-md-6 ph10">
                        <label for="price1" class="field prepend-icon mb5">
                            <input type="text" name="search_low" id="price1" class="gui-input" placeholder="0">
                            <label for="price1" class="field-icon">
                                <i class="fa fa-gbp"></i>
                            </label>
                        </label>
                    </div>
                    <div class="col-md-6 ph10">
                        <label for="price2" class="field prepend-icon mb5">
                            <input type="text" name="search_high" id="price2" class="gui-input" placeholder="1000">
                            <label for="price2" class="field-icon">
                                <i class="fa fa-gbp"></i>
                            </label>
                        </label>
                    </div>
                </div>

                <h6 class="mb15">{{trans('admin.by_date')}}</h6>

                <div class="section row mb20">
                    <div class="col-md-6 ph10">
                        <label for="datepicker1" class="field prepend-icon mb5">
                            <input type="date" id="datepicker1" name="search_from" class="gui-input fs13" placeholder="From">
                            <label class="field-icon">
                                <i class="fa fa-calendar"></i>
                            </label>
                        </label>
                    </div>
                    <div class="col-md-6 ph10">
                        <label for="datepicker2" class="field prepend-icon mb5">
                            <input type="date" id="datepicker2" name="search_to" class="gui-input fs13" placeholder="{{trans('admin.to')}}">
                            <label class="field-icon">
                                <i class="fa fa-calendar"></i>
                            </label>
                        </label>
                    </div>
                </div>


                <hr class="short">

                <div class="section">
                    <input type="submit" class="btn btn-primary pull-right ph30" value="{{trans('admin.search')}}">
                </div>

            </div>
{!! Form::close()!!}
        </aside>
        <!-- -------------- /Column Left -------------- -->

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center pt30">

            <!-- -------------- Recent Orders -------------- -->
            <div class="panel">
                <div class="text-dark pl25 fw700 fs35">
                    {{trans('admin.orders')}}
                </div>
                <div class="panel-menu allcp-form theme-primary mtn">

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{url('add_order')}}" class="btn btn-primary">{{trans('admin.new_order')}}</a>
                        </div>

                    </div>
                </div>
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                            <thead>
                            <tr class="bg-light">
                                <th class="text-center">{{trans('admin.order_date')}}</th>
                                <th class="text-center">{{trans('admin.order_id')}}</th>
                                <th class="text-center">{{trans('admin.customer_name')}}</th>
                                <th class="text-center">{{trans('admin.total_amount')}}</th>
                                <th class="text-center">{{trans('admin.remain_amount')}}</th>
                                <th class="text-center">{{trans('admin.notes')}}</th>
                                <th class="text-center">{{trans('admin.order_status')}}</th>
                                <th class="text-center">{{trans('admin.payment')}}</th>
                                <th class="text-center">{{trans('admin.edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach($orders  as $order)
                            <tr>

                                <td class="">
                                    <a href="{{ url('order_show/'.$order->id) }}" >{{$order->created_at->format(('d-m-Y   h:i a'))}}</a>
                                </td>
                                <td class="text-center"> <a href="{{ url('order_show/'.$order->id) }}">{{$order->id}}</a> <input type="hidden" id="orderid" value="{{$order->id}}"></td>
                                <td class="text-center">
                                    <span> <a href="{{ url('order_show/'.$order->id) }}">{{$order->client_name}}</a></span>
                                </td>
                                <td class="text-center">
                                    <span> <a href="{{ url('order_show/'.$order->id) }}" >{{$order->budget}}</a></span>
                                </td>
                                <td class="text-center">
                                    <span> <a href="{{ url('order_show/'.$order->id) }}" >{{$order->remain}}</a></span>
                                </td>
                                <td class="text-center"><a href="{{ url('order_show/'.$order->id) }}" >{{$order->notes}}</a></td>
                                <td class="text-center">
                                    <div class="btn-group text-right">

                                        <select  class="btn btn-primary br2 btn-xs fs12 ordertype" id="{{$order->id}}" name="ordertype" kam="{{$order->id}}" onchange="update_ordertype({{$order->id}});">
                                            <option class="btn btn-primary br2 btn-xs fs12" selected disabled><a href="" > {{$order->ordertype}}</a></option>
                                            @foreach($status  as $st)
                                                <option value="{{$st->order_status}}" > {{$st->order_status}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <a href="{{ url('order_show/'.$order->id) }}" class="btn btn-info br2 btn-xs"> {{trans('admin.payment')}}</a>
                                 </td>
                                <td class="text-center">
                                    <a href="{{ url('order/edit/'.$order->id) }}" class="btn btn-info br2 btn-xs"> {{trans('admin.edit')}}</a>
                                </td>

                            </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>
    <script>
        function update_ordertype(fr) {

            // here ?



            var ordertype = $('#'+fr).attr('kam');
            var ordertype_val = $('#'+fr).val();
            var uri = '{{url('ordertype_data/')}}/'+ordertype+'';
            var save = {
                'ordertype' : ordertype_val
            };
            $.ajax({
                url: uri,
                method: 'get',
                dataType:'json',
                data: save,
                success: function(result) {
                    $("#ordertype").val(result.ordertype);


                }
            });




            console.log(ordertype);
            console.log(ordertype_val);
            console.log(uri);



        }

        /*
        function update_ordertype() {
            // here ?
            $('#ordertype').each(function(){
console.log($(this).val());
            });



        var uri = 'url('ordertype_data')}}/'+ ordertype_id +'';
            var save = {
                'ordertype' : data,
                'kam': ordertype_id            };
            console.log(uri);
            console.log(ordertype_id);
            $.ajax({
                url: uri,
                method: 'get',
                dataType:'json',
                data: save,
                success: function(result) {
                    $("#ordertype").val(result.ordertype);


                }
            });

        }
         */

    </script>

@stop
