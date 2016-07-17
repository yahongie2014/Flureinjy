@extends('layout.home')
@section('content')
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">
            <div class="row">
                {!! Form::open(['url'=>'dash_search','method'=>'get']) !!}
                <label>From</label>
                <input type="date"  name="from">
                <label>to</label>
                <input type="date" name="to">
                <input type="submit" value="search">

                {!! Form::close() !!}
            </div>

            <!-- -------------- Quick Links -------------- -->
            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{STYLE}}/assets/img/pages/clipart0.png" class="img-responsive mauto" alt=""></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">Orders</h6>

                                    <h2 class="fs50 mt5 mbn">{{$orders}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{STYLE}}/assets/img/pages/clipart1.png" class="img-responsive mauto" alt=""></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">Total Cash-in</h6>

                                    <h2 class="fs50 mt5 mbn">@foreach($total as $sum)
                                            {{$sum->total_sales}}
                                        @endforeach</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{STYLE}}/assets/img/pages/clipart2.png" class="img-responsive mauto" alt=""></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">HAPPY CUSTOMERS</h6>

                                    <h2 class="fs50 mt5 mbn">{{$customer}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="panel panel-tile">
                        <div class="panel-body">
                            <div class="row pv10">
                                <div class="col-xs-5 ph10"><img src="{{STYLE}}/assets/img/pages/clipart3.png" class="img-responsive mauto" alt=""></div>
                                <div class="col-xs-7 pl5">
                                    <h6 class="text-muted">Expenses</h6>

                                    <h2 class="fs50 mt5 mbn">@foreach($ex as $xs)
                                            {{$xs->total_pay}}
                                        @endforeach</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- -------------- AllCP Info -------------- -->
            <div class="col-md-12 allcp-grid">

                <!-- -------------- Perfomance -------------- -->
                <div class="panel mbn row" data-panel-title="false">

                    <div class="col-md-12">
                        <div class="panel-head">
                            <h1>Performance</h1>
                        </div>
                        <div class="panel-body pn">

                            <div class=" text-dark pl25 fw700 fs35">

                                <div id="canvas-holder2">
                                    <canvas id="chart2"   height="600" />
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-xs-12 ">
                <div class="chute chute-center pt30">

                    <!-- -------------- Recent Orders -------------- -->
                    <div class="panel">
                        <div class="text-dark pl25 fw700 fs35">
                            {{trans('admin.orders')}}
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
                                        <th class="text-center">{{trans('admin.show')}}</th>
                                        <th class="text-center">{{trans('admin.edit')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    @foreach($order_reports  as $order_report)
                                        <tr>

                                            <td class="">
                                                {{$order_report->created_at}}
                                            </td>
                                            <td class="text-center">{{$order_report->id}} <input type="hidden" id="orderid" value="{{$order_report->id}}"></td>
                                            <td class="text-center">
                                                <span>{{$order_report->client_name}}</span>
                                            </td>
                                            <td class="text-center">
                                                <span>{{$order_report->budget}}</span>
                                            </td>
                                            <td class="text-center">
                                                <span>{{$order_report->remain}}</span>
                                            </td>
                                            <td class="text-center">{{$order_report->notes}}</td>
                                            <td class="text-center">
                                                <div class="btn-group text-right">

                                                    <select  class="btn btn-primary br2 btn-xs fs12 ordertype" id="{{$order_report->id}}" name="ordertype" kam="{{$order_report->id}}" onchange="update_ordertype({{$order_report->id}});">
                                                        <option class="btn btn-primary br2 btn-xs fs12" selected disabled><a href="" > {{$order_report->ordertype}}</a></option>
                                                        @foreach($status  as $st)
                                                            <option value="{{$st->order_status}}" > {{$st->order_status}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ url('order_show/'.$order_report->id) }}" class="btn btn-info br2 btn-xs"> {{trans('admin.show')}}</a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ url('order/edit/'.$order_report->id) }}" class="btn btn-info br2 btn-xs"> {{trans('admin.edit')}}</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- -------------- /Column Center -------------- -->
    </section>
    <style>
        #canvas-holder1 {
            width: 300px;
            margin: 20px auto;
        }
        #canvas-holder2 {
            width: 100%;
            margin: 20px 0px;
        }
        #chartjs-tooltip {
            opacity: 1;
            position: absolute;
            background: rgba(0, 0, 0, .7);
            color: white;
            padding: 3px;
            border-radius: 3px;
            -webkit-transition: all .1s ease;
            transition: all .1s ease;
            pointer-events: none;
            -webkit-transform: translate(-50%, 0);
            transform: translate(-50%, 0);
        }
        .chartjs-tooltip-key{
            display:inline-block;
            width:10px;
            height:10px;
        }
    </style>
    <script>

        Chart.defaults.global.maintainAspectRatio=false;
        Chart.defaults.global.pointHitDetectionRadius = 1;
        Chart.defaults.global.customTooltips = function(tooltip) {

            var tooltipEl = $('#chartjs-tooltip');

            if (!tooltip) {
                tooltipEl.css({
                    opacity: 0
                });
                return;
            }

            tooltipEl.removeClass('above below');
            tooltipEl.addClass(tooltip.yAlign);

            var innerHtml = '';
            for (var i = tooltip.labels.length - 1; i >= 0; i--) {
                innerHtml += [
                    '<div class="chartjs-tooltip-section">',
                    '	<span class="chartjs-tooltip-key" style="background-color:' + tooltip.legendColors[i].fill + '"></span>',
                    '	<span class="chartjs-tooltip-value">' + tooltip.labels[i] + '</span>',
                    '</div>'
                ].join('');
            }
            tooltipEl.html(innerHtml);

            tooltipEl.css({
                opacity: 1,
                left: tooltip.chart.canvas.offsetLeft + tooltip.x + 'px',
                top: tooltip.chart.canvas.offsetTop + tooltip.y + 'px',
                fontFamily: tooltip.fontFamily,
                fontSize: tooltip.fontSize,
                fontStyle: tooltip.fontStyle,
            });
        };
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var lineChartData = {
            labels:<?php
            echo json_encode($chart_date)?> ,
            datasets: [{
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: <?php $expaenses = array_map('intval', $expens_char);

                echo json_encode($expaenses)?>
            }, {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: <?php $payment = array_map('intval', $payment_chart);
                echo json_encode($payment)?>
            }]
        };

        window.onload = function() {


            var ctx2 = document.getElementById("chart2").getContext("2d");
            window.myLine = new Chart(ctx2).Line(lineChartData, {
                responsive: true
            });
        };
    </script>
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