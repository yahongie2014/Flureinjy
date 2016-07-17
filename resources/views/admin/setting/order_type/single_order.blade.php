@extends('layout.home')
@section('content')


    <section id="content" class="animated fadeIn">

        <div class="panel mb35">
            <div class="panel-heading">
                <span class="panel-title">{{trans('admin.add_order_type')}}</span>
            </div>
            <div class="panel-body br-t">
                <div class="allcp-form theme-primary">
                    <div class="section row mb10">
                        <div class="tab-block mb25">
                            <ul class="nav nav-tabs tabs-border nav-justified">
                                <li class="active">
                                    <a href="#tab15_1" data-toggle="tab" aria-expanded="true">{{trans('admin.order_type')}}</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab15_1" class="tab-pane active">

                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_type_name')}}:</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field-label col-sm-3 ph10 text-center">{{$order_type->order_type}}</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_option')}}:</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field-label col-sm-3 ph10 text-center">{{$order_type->options}}</label>

                                            </div>
                                        </div>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@stop