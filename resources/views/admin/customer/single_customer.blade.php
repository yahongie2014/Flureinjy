@extends('layout.home')
@section('content')

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

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy1">
                            <span class="panel-title">{{trans('admin.customer_data')}}</span>
                        </div>
                        <div class="panel-body br-t">

                            <!-- -------------- Icons -------------- -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.customer_name')}} :-
                                        </label>
                                        <label>
                                            {{$customer->name}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.customer_mobile')}} :-
                                        </label>
                                        <label>
                                            {{$customer->mobile}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.customer_email')}} :-
                                        </label>
                                        <label>
                                            {{$customer->email}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.customer_address')}} :-
                                        </label>
                                        <label>
                                            {{$customer->address}}
                                        </label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label>
                                            {{trans('admin.client_id')}} :-
                                        </label>
                                        <label>
                                            {{$customer->client_id}}
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