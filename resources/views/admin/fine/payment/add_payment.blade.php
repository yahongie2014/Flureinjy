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
                            <input type="text" id="search_from" name="datepicker1" class="gui-input fs13" placeholder="{{trans('admin.from')}}">
                            <label class="field-icon">
                                <i class="fa fa-calendar"></i>
                            </label>
                        </label>
                    </div>
                    <div class="col-md-6 ph10">
                        <label for="datepicker2" class="field prepend-icon mb5">
                            <input type="text" id="datepicker2" name="search_to" class="gui-input fs13" placeholder="{{trans('admin.to')}}">
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
{!! Form::close() !!}
        </aside>
        <!-- -------------- /Column Left -------------- -->

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center pt30">

            <!-- -------------- Recent Orders -------------- -->
            <div class="panel">
                <div class="text-dark pl25 fw700 fs35">
                    {{trans('admin.add_payment')}}
                </div>
                {!! Form::open(['url'=>'add/payment']) !!}
                <div class="panel-menu allcp-form theme-primary mtn">
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy7">
                            <span class="panel-title">{{trans('admin.payment_method')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.total_budget')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label class="field prepend-icon">
                                            <input type="text" name="total_budget"  id="total_budget"  class="gui-input" placeholder="{{trans('admin.type')}}" readonly>
                                            <label for="" class="field-icon">
                                                <i class="fa fa-money"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_id')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label class="field prepend-icon">
                                            <input type="text" id="order_id" name="order_id" onchange="get_data()"  class="gui-input" placeholder="{{trans('admin.order_id')}}" required>
                                            <label for="" class="field-icon">
                                                <i class="fa fa-money"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" value="0" id="total_payment">

                                <div class="section row mb10">
                                    <label for="store-currency" class="field-label col-sm-3 ph10 text-center">{{trans('admin.payment')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <div class="row">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.visa')}}:</label>
                                            <div class="col-md-9">
                                                <label class="field prepend-icon">
                                                    <input type="text" class="gui-input visa"  name="visa" value='0' onchange="visa_payment(this.form)">
                                                    <label for="" class="field-icon">
                                                        <i class="fa fa-money"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.cash')}}:</label>
                                            <div class="col-md-9">

                                                <input type="text" class=" gui-input cash" name="cash" value='0' onchange="cash_payment(this.form)">

                                            </div>
                                        </div>

                                        <div class="row">

                                        </div>

                                    </div>

                                </div>
                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.remaining')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label class="field prepend-icon">
                                            <input type="text" name="remain" value="0" id="remain" class="gui-input" placeholder="{{trans('admin.remaining')}}" readonly >
                                            <input type="hidden" id="total_payment">
                                            <label for="" class="field-icon">
                                                <i class="fa fa-money"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="panel mb35">
                                    <div class="panel-heading" id="spy7">
                                        <span class="panel-title">{{trans('admin.submit_payment')}}</span>
                                    </div>
                                    <div class="panel-body br-t">
                                        <div class="allcp-form theme-primary">
                                            <div class="col-sm-4 ">
                                                <input type="submit"  class="btn btn-lg btn-block btn-success" value="{{trans('admin.add_payment')}}">
                                            </div>
                                            <div class="col-sm-4 ">
                                                <a href="{{url('payment')}}"   class="btn btn-lg btn-block btn-danger" > {{trans('admin.cancel')}}</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
                {!! Form::close() !!}
            </div>

        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>
    <script>
        function cash_payment(fr) {
            var cash = $('.cash').val();
            var  remain = $('#remain').val();

            $('#remain').val(remain - cash);

        };
        function visa_payment(fr) {
            var visa = $('.visa').val();
            var  remain = $('#remain').val();

            $('#remain').val(remain - visa);
        };



        function get_data() {
            // here ?

            var id = $("#order_id").val();
            var uri = "{{url('payment_value')}}";
            var save = {
                'order_id' : id
            };
            console.log(id);
            $.ajax({
                url: uri,
                method: 'get',
                dataType:'json',
                data: save,
                success: function(result) {
                 console.log(result.remain) ;  $("#remain").val(result.remain);
                    $("#total_budget").val(result.budget);

                }
            });
        }





    </script>
@stop