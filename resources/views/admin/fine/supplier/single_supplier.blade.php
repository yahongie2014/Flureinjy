@extends('layout.home')
@section('content')
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290 bg-primary" data-chute-height="match">

            <div class="chute-affix" data-spy="affix" data-offset-top="200">

                <div id="nav-spy">
                    <ul class="nav chute-nav" data-smoothscroll="-90">
                        <li class="active">
                            <a href="#spy1">{{trans('admin.supplier_data')}}</a>
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

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy1">
                            <span class="panel-title">{{trans('admin.supplier_data')}}</span>
                        </div>
                        <div class="panel-body br-t">

                            <!-- -------------- Icons -------------- -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.supplier_name')}} :-
                                        </label>
                                        <label>
                                            {{$supplier->supplier}}

                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.supplier_phone')}} :-
                                        </label>
                                        <label>
                                            {{$supplier->phone}}

                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.supplier_mobile')}} :-
                                        </label>
                                        <label>
                                            {{$supplier->mobile}}

                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.supplier_email')}} :-
                                        </label>
                                        <label>
                                            {{$supplier->email}}

                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.supplier_id')}} :-
                                        </label>
                                        <label>
                                            {{$supplier->supplier_id}}

                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.supplier_address')}} :-
                                        </label>
                                        <label>
                                            {{$supplier->address}}

                                        </label>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>



                </div>

            </div>
        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>

@stop