@extends('layout.home')
@section('content')

<section id="content" class="table-layout animated fadeIn">

    <!-- -------------- Column Left -------------- -->
    <aside class="chute chute-left chute290" data-chute-height="match">
{!! Form::open(['method'=>'get','url'=>'payment_search'])!!}
        <!-- -------------- Menu Block -------------- -->
        <div class="allcp-form theme-primary">

            <h5 class="pln"> {{trans('admin.filter_payment')}}</h5>

            <h6 class="mb15">{{trans('admin.by_order_id')}}</h6>

            <div class="section mb20">
                <label for="order-id" class="field prepend-icon">
                    <input type="text" name="search_id" id="order-id" class="gui-input" placeholder="# {{trans('admin.order_id')}}">
                    <label for="order-id" class="field-icon">
                        <i class="fa fa-tag"></i>
                    </label>
                </label>
            </div>

            <h6 class="mb15"> {{trans('admin.by_customer_name')}}</h6>

            <div class="section mb20">
                <label for="order-id" class="field prepend-icon">
                    <input type="text" name="search_name" id="order-id" class="gui-input" placeholder="{{trans('admin.customer_name')}}">
                    <label for="order-id" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
            </div>

            <h6 class="mb15"> {{trans('admin.by_date')}}</h6>

            <div class="section row mb20">
                <div class="col-md-6 ph10">
                    <label for="datepicker1" class="field prepend-icon mb5">
                        <input type="date" id="search_from" name="datepicker1" class="gui-input fs13" placeholder="{{trans('admin.from')}}">
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
                <input class="btn btn-primary pull-right ph30" type="submit" value="{{trans('admin.search')}}">
            </div>

        </div>

    </aside>
    <!-- -------------- /Column Left -------------- -->

    <!-- -------------- Column Center -------------- -->
    <div class="chute chute-center pt30">

        <!-- -------------- Recent Orders -------------- -->
        <div class="panel">
            <div class="text-dark pl25 fw700 fs35">
                {{trans('admin.payment')}}
            </div>
            <div class="panel-menu allcp-form theme-primary mtn">

                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="text-dark pl25 fw300 fs35">
                            {{trans('admin.total')}}: <span>
                                @foreach($total as $payment)
                                    {{$payment->total_sales}}
                                @endforeach
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body pn">
                <div class="table-responsive">
                    <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                        <thead>
                        <tr class="bg-light">
                            <th class="text-center">{{trans('admin.order_id')}}</th>
                            <th class="">{{trans('admin.customer_name')}}</th>
                            <th class="">{{trans('admin.date')}}</th>
                            <th class="">{{trans('admin.type')}}</th>
                            <th class="">{{trans('admin.payment')}}(L.E.)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($payments as $payment)
                        <tr>
                            <td class="">{{$payment->id}}</td>
                            <td class="w175"><span>{{$payment->client_name}}</span></td>
                            <td class="">{{$payment->created_at->format(('d-m-Y   h:i a'))}}</td>
                            <td class="">{{$payment->method}}</td>
                            <td class="">{{$payment->budget}}</td>
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
@stop