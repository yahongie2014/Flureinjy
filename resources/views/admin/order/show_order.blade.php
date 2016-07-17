@extends('layout.home')
@section('content')

    <script>
        function printContent(el){
            var restorepage = document.body.innerHTML;
            var printcontent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printcontent;
            window.print();
            document.body.innerHTML = restorepage;
        }
    </script>
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290 bg-primary" data-chute-height="match">

            <div class="chute-affix" data-spy="affix" data-offset-top="200">

                <div id="nav-spy">
                    <ul class="nav chute-nav" data-smoothscroll="-90">
                        <li class="active">
                            <a href="#spy1"> Customer Data</a>
                        </li>
                        <li>
                            <a href="#spy2"> Flowers</a>
                        </li>
                        <li>
                            <a href="#spy3"> Extras</a>
                        </li>
                        <li>
                            <a href="#spy4"> Delivery</a>
                        </li>
                        <li>
                            <a href="#spy5"> Message on Card</a>
                        </li>
                        <li>
                            <a href="#spy6"> Notes</a>
                        </li>
                        <li>
                            <a href="#spy7"> Payment Method</a>
                        </li>
                    </ul>
                </div>

            </div>

        </aside>
        <!-- -------------- /Column Left -------------- -->

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center" id="content">

            <div class="mw1000 center-block">

                <!-- -------------- Spec Form -------------- -->
                <div class="allcp-form">
                    <div class="panel mb35">
                        <div class="panel-heading" >
                            <span class="panel-title">{{trans('admin.add_order')}}</span>
                        </div>

                        <div class="panel-body br-t">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_date')}}:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->date_se}}</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_type')}}:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->order_way}}</b>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.sales_person')}}:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->sales_person}}</b>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy1">
                            <span class="panel-title">{{trans('admin.customer_data')}}</span>
                        </div>
                        <div class="panel-body br-t">

                            <!-- -------------- Icons -------------- -->
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">Customer Name:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->client_name}}</b>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- -------------- Formats -------------- -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">Phone:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>01258936325</b>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">Mobile:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->phone}}</b>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">Email:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->email}}</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-3 ph10 text-center">Client ID:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->client_id}}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="section row mb10">
                                        <label class="field-label col-sm-2 ph10 text-center">Address:</label>

                                        <div class="field-label col-sm-9 ph10">
                                            <b>{{$order->address}}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy2">
                            <span class="panel-title">Flowers</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">Order Type:</label>

                                    <div class="field-label col-sm-9 ph10">
                                        <b>{{$order->order_type}}</b>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label  class="field-label col-sm-3 ph10 text-center">Flower:</label>

                                    <div class="field-label col-sm-9 ph10">
                                        <div class="row">

                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th class="text-center pr10">Flower</th>
                                                    <th class="text-center pr10">Color</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center pr10">{{$order->flower_type}}</td>
                                                    <td class="text-center pr10">{{$order->flower_color}}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>



                                    </div>

                                </div>

                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">Budget:</label>

                                    <div class="field-label col-sm-9 ph10">
                                        <b>{{$order->flower_budget}}</b>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Extras -->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy3">
                            <span class="panel-title">Extras</span>
                        </div>
                        <div class="panel-body br-t">

                            <div class="section row mb10">
                                <div class="col-md-12 ph10 mt30 mb20">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center pr10">Extra</th>
                                            <th class="text-center pr10">Type</th>
                                            <th class="text-center pr10">Amount</th>
                                            <th class="text-center pr10">Budget</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center pr10">{{$order->extra_name}}</td>
                                            <td class="text-center pr10">{{$order->extra_type}}</td>
                                            <td class="text-center pr10">{{$order->amount}}</td>
                                            <td class="text-center pr10">{{$order->extra_budget}}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Order Delivery -->
                    <div class="panel mb35" id="delivery_div">
                        <div class="panel-heading" id="spy4">
                            <span class="panel-title">Order Delivery</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <div class="tab-block mb25">

                                        <div id="tab15_1" class="tab-pane active">

                                            <div class="section row mb10">
                                                <label class="field-label col-sm-3 ph10 text-center">Name:</label>

                                                <div class="field-label col-sm-9 ph10">
                                                    {{$order->delivery_name}}
                                                </div>
                                            </div>
                                            <div class="section row mb10">
                                                <label class="field-label col-sm-3 ph10 text-center">Phone:</label>

                                                <div class="field-label col-sm-9 ph10">
                                                    {{$order->delivery_phone}}
                                                </div>
                                            </div>

                                            <div class="section row mb10">
                                                <label class="field-label col-sm-3 ph10 text-center">Address:</label>

                                                <div class="field-label col-sm-9 ph10">
                                                    <p>
                                                        {{$order->delivery_address}}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="section row mb10">
                                                <label class="field-label col-sm-3 ph10 text-center">Notes:</label>

                                                <div class="field-label col-sm-9 ph10">
                                                    <P>
                                                        {{$order->delivery_notes}}                                                    </P>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Message on Card-->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy5">
                            <span class="panel-title">Message on Card</span>
                        </div>
                        <div class="panel-body br-t">
                            <p>
                                {{$order->message_card}}                            </p>
                        </div>
                    </div>

                    <!-- Notes-->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy6">
                            <span class="panel-title">Notes</span>
                        </div>
                        <div class="panel-body br-t">
                            <p>
                                {{$order->notes}}                            </p>
                        </div>
                    </div>

                    <!-- Payment Method-->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy7">
                            <span class="panel-title">Payment Method</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">Total budget:</label>

                                    <div class="field-label col-sm-9 ph10">
                                        <b>{{$order->budget}}</b>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">Payment:</label>

                                    <div class="col-sm-9 ph10">

                                        <div class="col-md-12 ">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                <tr>
                                                    <th class="text-center pr10">Amount Paid</th>
                                                    <th class="text-center pr10">Method</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="text-center pr10">{{$order->amount_paid}}</td>
                                                    <td class="text-center pr10">{{$order->method}}</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">The Remaining:</label>

                                    <div class="field-label col-sm-9 ph10">
                                        <b>{{$order->remain}}</b>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="panel mb35">
                        <div class="panel-heading">
                            <span class="panel-title">Order Edits Timelinw</span>
                        </div>
                        <div class="panel-body br-t">

                            <div class="section row mb10">
                                <div class="col-md-12 ph10 mt30 mb20">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="text-center pr10">Version</th>
                                            <th class="text-center pr10">Update Time</th>
                                            <th class="text-center pr10">Show</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($time_line  as $time)
                                            <tr>


                                                <td class="text-center">{{$time->id}} <input type="hidden" id="orderid" value="{{$order->id}}"></td>

                                                <td class="text-center">
                                                    <span>{{$time->created_at}}</span>
                                                </td>


                                                <td class="text-center">
                                                    <a href="{{ url('timeline_show/'.$time->id) }}" class="btn btn-info br2 btn-xs"> {{trans('admin.show')}}</a>
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-body mt5">
                            <div class="col-sm-4 ">
                                <button class="btn btn-lg btn-block btn-success" onclick="printContent('content')">Print Order</button>

                            </div>

                        <div class="col-sm-4">
                        <button class="btn btn-lg btn-block btn-primary" onclick="printContent('delivery_div')">Print delivery</button>

                    </div>

                            <div class="col-sm-4 ">
                                <a href="{{url('order/edit/'.$order->id)}}" class="btn btn-lg btn-block btn-success">Edit Order</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>


@stop