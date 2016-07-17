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
                    {!! Form::open(['url'=>'customer/edit/'.$customer->id]) !!}

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
                                            <input type="text" value="{{$customer->name}}" name="name" id="name" class="gui-input" placeholder="{{trans('admin.customer_name')}}">
                                            <label for="name" class="field-icon">
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
                                            <input type="text"  value="{{$customer->phone}}"  name="phone" id="phone" class="gui-input" placeholder="{{trans('admin.phone_number')}}">
                                            <label for="phone" class="field-icon">
                                                <i class="fa fa-phone"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="mobile"   value="{{$customer->mobile}}"  id="mobile" class="gui-input" placeholder="{{trans('admin.mobile_number')}}">
                                            <label for="mobile" class="field-icon">
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
                                            <input type="email" name="email" id="email"  value="{{$customer->email}}"  class="gui-input" placeholder="{{trans('admin.email')}}">
                                            <label for="email" class="field-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="client_id"  value="{{$customer->client_id}}"  id="client_id" class="gui-input" placeholder="{{trans('admin.customer_id')}}">
                                            <label for="client_id" class="field-icon">
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
                                            <input type="text" name="address"  value="{{$customer->address}}"  id="address" class="gui-input" placeholder="{{trans('admin.address')}}">
                                            <label for="address" class="field-icon">
                                                <i class="fa fa-map-marker"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy7">
                            <span class="panel-title">{{trans('admin.submit')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">
                                <div class="col-sm-4 ">
                                    <input type="submit" class="btn btn-lg btn-block btn-success" value="{{trans('admin.save')}}">
                                </div>

                                <div class="col-sm-4 ">
                                    <a href="{{url('customer')}}"   class="btn btn-lg btn-block btn-danger" > {{trans('admin.cancel')}}</a>
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


@stop