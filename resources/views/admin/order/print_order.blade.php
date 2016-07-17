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
                            <a href="#spy1"> {{trans('admin.customer_data')}}</a>
                        </li>
                    </ul>
                </div>

            </div>

        </aside>
        <!-- -------------- /Column Left -------------- -->

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">

            <div class="mw1000 center-block">

                <!-- -------------- Spec Form -------------- -->
                <div class="allcp-form">

                    <div class="panel mb35" id="content">
                        <div class="panel-heading" id="spy1">
                            <span class="panel-title">{{trans('admin.order')}}</span>
                        </div>
                        <div class="panel-body br-t">

                            <!-- -------------- Icons -------------- -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.order')}} :-
                                        </label>
                                        <label>
                                            {{$order->order_way}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.sales_person')}} :-
                                        </label>
                                        <label>
                                            {{$order->sales_person}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.customer_name')}} :-
                                        </label>
                                        <label>
                                            {{$order->client_name}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.phone')}} :-
                                        </label>
                                        <label>
                                            {{$order->phone}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.order_id')}} :-
                                        </label>
                                        <label>
                                            {{$order->id}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.address')}} :-
                                        </label>
                                        <label>
                                            {{$order->address}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.order_type')}} :-
                                        </label>
                                        <label>
                                            {{$order->order_type}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.container')}} :-
                                        </label>
                                        <label>
                                            {{$order->container}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.flower_type')}} :-
                                        </label>
                                        <label>
                                            {{$order->flower_type}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.flower_color')}} :-
                                        </label>
                                        <label>
                                            {{$order->flower_color}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.extra_name')}} :-
                                        </label>
                                        <label>
                                            {{$order->extra_name}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.extra_type')}} :-
                                        </label>
                                        <label>
                                            {{$order->extra_type}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div id="delivery_div">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.delivery_name')}} :-
                                        </label>
                                        <label>
                                            {{$order->delivery_name}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.delivery_phone')}} :-
                                        </label>
                                        <label>
                                            {{$order->delivery_phone}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.address')}} :-
                                        </label>
                                        <label>
                                            {{$order->address}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.delivery_notes')}} :-
                                        </label>
                                        <label>
                                            {{$order->delivery_notes}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.message_card')}} :-
                                        </label>
                                        <label>
                                            {{$order->message_card}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.notes')}} :-
                                        </label>
                                        <label>
                                            {{$order->notes}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                                <button onclick="printContent('delivery_div')">Print delivery</button>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.amount_paid')}} :-
                                        </label>
                                        <label>
                                            {{$order->amount_paid}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.method')}} :-
                                        </label>
                                        <label>
                                            {{$order->method}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.remain')}} :-
                                        </label>
                                        <label>
                                            {{$order->remain}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.time')}} :-
                                        </label>
                                        <label>
                                            {{$order->created_at}}
                                        </label>
                                    </div>
                                </div>

                            </div>
















                        </div>
                        <button onclick="printContent('content')">Print content</button>

                    </div>

                </div>

            </div>
        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>


@stop