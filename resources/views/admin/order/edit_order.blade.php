@extends('layout.home')
@section('content')
    <div >
        <input type="hidden" id="output" value="0">
    </div>
    <script type="text/javascript">


        //color function
        function add_color(){
            var data = $('#flower option:selected').attr('kamatcho');
            var single_color = data.split(',');
            $("#color").empty();
            var html = '';
            for(var i =0 ; i<single_color.length;i++){
                html= "<option id='single' value=\""+single_color[i]+"\">"+single_color[i]+"</option>"
                $("#color").append(html);
            }

        }
        function add_container(){
            var container_data = $('.order_type option:selected').attr('cont');
            var single_container = container_data.split(',');
            $(".container").empty();
            var html = '';
            for(var i =0 ; i<single_container.length;i++){
                html= "<option id='single_container' value=\""+single_container[i]+"\">"+single_container[i]+"</option>"
                $(".container").append(html);
            }

        }
        function add_extra(){
            var extra_data = $('#extra option:selected').attr('extra_val');
            var single_extra = extra_data.split(',');
            $("#extra_type").empty();
            var html = '';
            for(var i =0 ; i<single_extra.length;i++){
                html= "<option id='extra_val' value=\""+single_extra[i]+"\">"+single_extra[i]+"</option>"
                $("#extra_type").append(html);
            }

        }
        function addMoreRows(frm) {
            var row_i = $('#row_i').val();
            var rowCount = row_i;


            rowCount ++;
            var flower = $('#flower').val();
            var color = $('#color').val();
            var recRow = '<tr id="rowCount' + rowCount + '"> <td class="text-center"> ' + flower + '<input type="hidden" name="flower[]" value='+flower+'></td><td class="text-center"> ' + color + '<input type="hidden" name="color[]" value='+color+'></td> <td class="text-center"> <a href="javascript:void(0);" onclick="removeRow(' + rowCount + ');">Remove</a> </td></tr> ';

            jQuery('#flower_color').append(recRow);

        }


        function removeRow(removeNum) {
            jQuery('#rowCount'+removeNum).remove();
        }


    </script>
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290 bg-primary" data-chute-height="match">

            <div class="chute-affix" data-spy="affix" data-offset-top="200">

                <div id="nav-spy">
                    <ul class="nav chute-nav" data-smoothscroll="-90">
                        <li class="active">
                            <a href="#spy1">{{trans('admin.customer_data')}}</a>
                        </li>
                        <li>
                            <a href="#spy2"> {{trans('admin.flower')}}</a>
                        </li>
                        <li>
                            <a href="#spy3"> {{trans('admin.extra')}}</a>
                        </li>
                        <li>
                            <a href="#spy4"> {{trans('admin.delivery')}}</a>
                        </li>
                        <li>
                            <a href="#spy5"> {{trans('admin.message_on_card')}}</a>
                        </li>
                        <li>
                            <a href="#spy6"> {{trans('admin.notes')}}</a>
                        </li>
                        <li>
                            <a href="#spy7">{{trans('admin.payment_method')}}</a>
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
                    {!! Form::open(['url'=>'edit/order/'.$single->id]) !!}
                    <div class="panel mb35">
                        <div class="panel-heading" >
                            <span class="panel-title">{{trans('add_order')}}</span>
                        </div>

                        <div class="panel-body br-t">

                            <!-- -------------- Order Type -------------- -->
                            <div class="section row mt20 mb30">
                                <div class="section text-center">
                                    <label class="field option mb5">
                                        @if($single->order_way == trans('admin.in_shop'))
                                            <input type="radio" name="payment" value="{{trans('admin.in_shop')}}" checked>

                                        @else
                                            <input type="radio" name="payment" value="{{trans('admin.in_shop')}}">

                                        @endif
                                        <span class="radio"></span>{{trans('admin.in_shop')}}</label>
                                    <label class="field option mb5">
                                        @if($single->order_way == trans('admin.telephone'))
                                            <input type="radio" name="payment" value="{{trans('admin.telephone')}}" checked>

                                        @else
                                            <input type="radio" name="payment" value="{{trans('admin.telephone')}}">

                                        @endif
                                        <span class="radio"></span>{{trans('admin.telephone')}}</label>


                                </div>
                            </div>

                            <div class="section row mb10">
                                <label for="store-currency" class="field-label col-sm-3 ph10 text-center">{{trans('admin.sales_person')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <select name="sales_person" class="select2-single form-control">
                                        <option selected>{{$single->sales_person}}</option>
                                        @foreach($sales as $sl)
                                            <option value="{{$sl->full_name}}">{{$sl->full_name}}</option>
                                        @endforeach

                                    </select>
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
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="client_name" id="client_name" class="gui-input" value="{{$single->client_name}}" placeholder="{{trans('admin.client_name')}}" readonly>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- -------------- Formats -------------- -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="phone_number" id="phone" value="{{$single->phone}}" class="gui-input" placeholder="{{trans('admin.phone_number')}}" readonly>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="mobile_number" id="mobile_number" value="{{$single->mobile}}" class="gui-input mobile_number" onchange="get_data();" placeholder="{{trans('admin.mobile_number')}}">
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-mobile"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email" value="{{$single->email}}" class="gui-input" placeholder="{{trans('admin.email')}}" readonly>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="client_id" id="client_id" value="{{$single->id}}" class="gui-input" placeholder="{{trans('admin.client_id')}}" readonly>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="client_address" id="address" value="{{$single->address}}" class="gui-input" placeholder="{{trans('admin.address')}}" readonly>
                                            <label for="firstname" class="field-icon">
                                                <i class="fa fa-map-marker"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <!-- -------------- /form -------------- -->
                        </div>
                    </div>

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy2">
                            <span class="panel-title">{{trans('admin.flower')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_type')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label class="field select">
                                            <select id="set-location"  onchange="add_container();" class="order_type" name="order_type">
                                                <option selected="selected" >{{$single->order_type}}</option>
                                                @foreach($order_type as $order)
                                                    <option value="{{$order->order_type}}" cont="{{$order->options}}">{{$order->order_type}}</option>
                                                @endforeach
                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_option')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label class="field select">
                                            <select id="set-location" class="container" name="order_container">
                                                <option selected="selected" >{{$single->container}}</option>

                                            </select>
                                            <i class="arrow double"></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-currency" class="field-label col-sm-3 ph10 text-center">{{trans('admin.flower')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <div class="row">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.type')}}:</label>
                                            <div class="col-md-9">
                                                <select  id="flower" onchange="add_color()" id="flower" class="select2-single form-control">
                                                    <option selected="selected" disabled>{{trans('admin.select_flower_type')}}</option>
                                                    @foreach($flowers as $flower)
                                                        <option value="{{$flower->name}}" kamatcho="{{$flower->color}}">{{$flower->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.color')}}:</label>
                                            <div class="col-md-9">
                                                <select  id="color" class="select2-single form-control">
                                                    <option selected="selected" disabled>{{trans('admin.select_flower_color')}}</option>

                                                </select>

                                                <div class="row">
                                                    <div class="col-sm-6 mt20">
                                                        <a onclick="addMoreRows(this.form)" class="btn btn-success btn-alt btn-block br-n">{{trans('admin.add_to_order')}}</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 ph10 mt30 mb20">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center pr10">{{trans('admin.type')}}</th>
                                                        <th class="text-center pr10">{{trans('admin.color')}}</th>
                                                        <th class="text-center pr10">{{trans('admin.remove')}}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="flower_color">
                                                    <?php $single_one = $single->flower_type?>
                                                    <?php  $flower_type =explode(',',$single_one)  ?>
                                                    <?php  $flower_color =explode(',',$single->flower_color)  ?>

                                                   @for($i=0;$i<count($flower_type);$i++)
                                                       <tr id="rowCount{{$i}}">
                                                           <td>
                                                               {{$flower_type[$i]}}
                                                               <input type="hidden" name="flower[]" value="{{$flower_type[$i]}}">
                                                           </td>
                                                           <td>
                                                               {{$flower_color[$i]}}
                                                               <input type="hidden" name="color[]" value="{{$flower_color[$i]}}">
                                                           </td>
                                                           <td>
                                                               <a href="javascript:void(0);" onclick="removeRow({{$i}});">Remove</a>
                                                           </td>
                                                       </tr>
                                                       @endfor
                                                    <input type="hidden" id="row_i" value="{{$i}}">

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>



                                    </div>

                                </div>

                                <div class="section row mb10">
                                    <label for="store-units" class="field-label col-sm-3 ph10 text-center">{{trans('admin.budget')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label for="store-units" class="field prepend-icon">
                                            <input type="text" name="flower_budget" value="{{$single->flower_budget}}" id="budget" class="gui-input extra_budget" value="" onchange="inputChange()" placeholder="{{trans('admin.budget')}}">
                                            <label for="store-units" class="field-icon">
                                                <i class="fa fa-money"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Extras -->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy3">
                            <span class="panel-title">{{trans('admin.extra')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <div class="row">
                                        <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.extra')}}:</label>
                                        <div class="col-md-9">
                                            <select name="order_extra" onchange="add_extra(this.form)" id="extra" class="select2-single form-control">
                                                <option selected="selected" disabled>{{trans('admin.select_extra')}}</option>
                                                @foreach($extra as $ex)
                                                    <option value="{{$ex->name}}" extra_val="{{$ex->type}}">{{$ex->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <div class="row">
                                        <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.type')}}:</label>
                                        <div class="col-md-9">
                                            <select id="extra_type" class="select2-single form-control">
                                                <option selected="selected" disabled>{{trans('admin.select_extra_type')}}</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="store-units" class="field-label col-sm-3 ph10 text-center">{{trans('admin.amount')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label for="store-units" class="field prepend-icon">
                                            <input type="text"  id="extra_amount" class="gui-input" value="" placeholder="{{trans('admin.amount')}}">
                                            <label for="store-units" class="field-icon">
                                                <i class="fa fa-bars"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label for="store-units" class="field-label col-sm-3 ph10 text-center">{{trans('admin.price')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <label for="store-units" class="field prepend-icon">
                                            <input type="text"  id="extra_budget" class="gui-input" value="" placeholder="{{trans('admin.price')}}">
                                            <label for="store-units" class="field-icon">
                                                <i class="fa fa-money"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="section row mb10">

                                    <div class="col-sm-3 col-sm-offset-3 text-center">
                                        <a onclick="addMoreextra(this.form)" class="btn btn-success btn-alt btn-block br-n">{{trans('admin.add_to_order')}}</a>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <div class="col-md-12 ph10 mt30 mb20">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-center pr10">{{trans('admin.extra')}}</th>
                                                <th class="text-center pr10">{{trans('admin.type')}}</th>
                                                <th class="text-center pr10">{{trans('admin.amount')}}</th>
                                                <th class="text-center pr10">{{trans('admin.budget')}}</th>
                                                <th class="text-center pr10">{{trans('admin.remove')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody id="extra_table">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- Order Delivery -->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy4">
                            <span class="panel-title">{{trans('admin.order_delivery')}}</span>

                        </div>
                        <select name="ordertype" id="data_value" onchange="show_value();">
                            <option selected disabled>Please Select Order Type</option>
                            <option   value="delivery">{{trans('admin.delivery')}}</option>
                            <option   value="pickup">{{trans('admin.pickup')}}</option>
                            <option   value="ontime">{{trans('admin.ontime')}}</option>


                        </select>
                        <div id="delivery_data" style="display: none">

                            <div class="section row mb10">
                                <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.name')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <label class="field prepend-icon">
                                        <input type="text" name="name" value="{{$single->delivery_name}}" id="name" class="gui-input" placeholder="{{trans('admin.name')}}">
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-user"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="section row mb10">
                                <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.phone')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <label class="field prepend-icon">
                                        <input type="text" name="phone" id="" value="{{$single->delivery_phone}}"class="gui-input" placeholder="{{trans('admin.phone')}}">
                                        <label for="" class="field-icon">
                                            <i class="fa fa-phone"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row mb10">
                                <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.address')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <label class="field prepend-icon">
                                        <textarea name="address" class="form-control" id="textArea2" rows="3">{{$single->address}}</textarea>
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-map-marker"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                            <div class="section row mb10">
                                <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.notes')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <label class="field prepend-icon">
                                        <textarea name="delivery_notes" class="form-control" id="textArea2" rows="8">{{$single->delivery_notes}}</textarea>
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-pencil"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                            <div class="section row mb10">
                                <label for="store-units" class="field-label col-sm-3 ph10 text-center">{{trans('admin.delivery_budget')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <label for="store-units" class="field prepend-icon">
                                        <input type="text" name="delivery_budget" id="" value="{{$single->delivery_budget}}" class="gui-input extra_budget" onchange="inputChange()"  placeholder="{{trans('admin.delivery_budget')}}" value="0">
                                        <label for="store-units" class="field-icon">
                                            <i class="fa fa-money"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div id="pickup_data" style="display: none">

                            <div class="section row mb10">
                                <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.date')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <div class="input-group date" id="datetimepicker5">
										                        <span class="input-group-addon cursor">
										                          <i class="fa fa-calendar"></i>
										                        </span>
                                        <input type="text" class="form-control" value="{{$single->pickup_date}}" name="pickup_date">
                                    </div>
                                </div>
                            </div>

                            <div class="section row mb10">
                                <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.time')}}:</label>

                                <div class="col-sm-9 ph10">
                                    <div class="input-group date" id="datetimepicker6">
										                        <span class="input-group-addon cursor">
										                          <i class="fa fa-calendar"></i>
										                        </span>
                                        <input type="text" class="form-control" value="{{$single->pickup_time}}" name="pickup_time">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div id="ontime_data" style="display: none">

                            <div class="section row mb10">
                                <label for="store-units" class="field-label col-sm-3 ph10 text-center">{{trans('admin.on_time')}}:</label>
                                <div class="col-sm-9 ph10">
                                    <div class="checkbox-custom checkbox-success mt10">
                                        <input name="ontime" type="checkbox" id="checkboxExample12" value="{{trans('admin.on_time')}}">
                                        <label for="checkboxExample12">{{trans('admin.on_time')}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>


                    <!-- Message on Card-->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy5">
                            <span class="panel-title">{{trans('admin.message_on_card')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <label class="field prepend-icon">
                                        <textarea name="message_card" class="form-control" id="textArea2" rows="8">{{$single->message_card}}</textarea>
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-pencil"></i>
                                        </label>
                                    </label>


                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Notes-->
                    <div class="panel mb35">
                        <div class="panel-heading" id="spy6">
                            <span class="panel-title">{{trans('admin.notes')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <label class="field prepend-icon">
                                        <textarea name="notes" class="form-control" id="textArea2" rows="8">{{$single->notes}}</textarea>
                                        <label for="firstname" class="field-icon">
                                            <i class="fa fa-pencil"></i>
                                        </label>
                                    </label>


                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Payment Method-->

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy7">
                            <span class="panel-title">{{trans('admin.submit_order')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">
                                <div class="col-sm-4 ">
                                    <input type="submit"  class="btn btn-lg btn-block btn-success" value="{{trans('admin.place_order')}}">
                                </div>

                                <div class="col-sm-4 ">
                                    <a href="{{url('show_all_orders')}}"   class="btn btn-lg btn-block btn-danger" > {{trans('admin.cancel')}}</a>
                                </div>

                            </div>
                        </div>
                    </div>


                    {!! Form::close() !!}
                </div>

            </div>
        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>
    <script>
        function inputChange(){

            var total = 0;
            $('.extra_budget').each(function(){

                total += +$(this).val();

            });
            $('#total_budget').val(total);

        }
        function addMoreextra(frm) {
            rowCount ++;
            var extra = $('#extra').val();
            var extra_type = $('#extra_type').val();
            var extra_amount = $('#extra_amount').val();
            var extra_budget = $('#extra_budget').val();
            var recRow = '<tr id="extraCount' + rowCount + '"> <td class="text-center"> ' + extra + '<input type="hidden" name="extra_name[]" value='+extra+'></td><td class="text-center"> ' + extra_type + '<input type="hidden" name="extra_type[]" value='+extra_type+'></td><td class="text-center"> ' + extra_amount + '<input type="hidden" name="extra_amount[]" value='+extra_amount+'></td><td class="text-center"> ' + extra_budget + '<input type="hidden" class="extra_budget"  name="budget[]" id="budget" value='+extra_budget+'></td> <td class="text-center"> <a href="javascript:void(0);" onclick="remove_extra(' + rowCount + ');">Remove</a> </td></tr> ';
            // var total_extra = $('#output').val();


            jQuery('#extra_table').append(recRow);
            var total = 0;
            $('.extra_budget').each(function(){

                total += +$(this).val();

            });
            $('#total_budget').val(total);


            $('#extra_amount').val('');
            $('#extra_budget').val('');

        }
        function remove_extra(removeNum) {
            jQuery('#extraCount'+removeNum).remove();
            var total = 0;
            $('.extra_budget').each(function(){

                total += +$(this).val();

            });
            $('#total_budget').val(total);

        }
        function payment(){
            var total = 0;
            var total_budget  = $('#total_budget').val();
            $('.payment_value').each(function(){

                total += +$(this).val();

            });
            $('#total_payment').val(total);
            $('#remain').val(total_budget - total);


        }
        function addMorePayment(frm) {
            rowCount ++;
            $('#payment_amount').empty();
            var payment_amount = $('#payment_amount').val();
            var total_budget = $('#total_budget').val();
            var payment_method = $('#payment_method').val();
            var recRow = '<tr id="paymentCount' + rowCount + '"> <td class="text-center"> ' + payment_amount + '<input type="hidden" class="payment_value" name="payment_amount[]" value='+payment_amount+'></td><td class="text-center"> ' + payment_method + '<input type="hidden" name="payment_method[]" value='+payment_method+'></td> <td class="text-center"> <a href="javascript:void(0);" onclick="remove_payment(' + rowCount + ');">Remove</a> </td></tr> ';

            jQuery('#payment_table').append(recRow);
            $('#payment_amount').val('');
            var total = 0;
            $('.payment_value').each(function(){

                total += +$(this).val();

            });
            $('#total_payment').val(total);
            $('#remain').val(total_budget - total);



        }


        function remove_payment(removeNum) {
            jQuery('#paymentCount'+removeNum).remove();
            var total = 0;
            var total_budget = $('#total_budget').val();
            $('.payment_value').each(function(){

                total += +$(this).val();

            });
            $('#total_payment').val(total);
            $('#remain').val(total_budget - total);

        }
        function show_value(){
            var data_value = $('#data_value').val();
            if(data_value == 'delivery'){
                $('#delivery_data').show();
                $('#pickup_data').hide();
                $('ontime_data').hide();
            };

            if(data_value == 'pickup'){
                $('#delivery_data').hide();
                $('#pickup_data').show();
                $('ontime_data').hide();
            };
            if(data_value == 'ontime'){
                $('#delivery_data').hide();
                $('#pickup_data').hide();
                $('#ontime_data').show();
            }

        }

        function get_data() {
            // here ?
            var mobile = $("#mobile_number").val();
            var uri = "{{url('customer_data')}}";
            var save = {
                'mobile_number' : mobile
            };
            $.ajax({
                url: uri,
                method: 'get',
                dataType:'json',
                data: save,
                success: function(result) {
                    $("#client_name").val(result.name);
                    $("#mobile_number").val(result.mobile);
                    $("#phone").val(result.phone);
                    $("#email").val(result.email);
                    $("#client_id").val(result.id);
                    $("#address").val(result.address);
                }
            });
        }





    </script>
@stop
