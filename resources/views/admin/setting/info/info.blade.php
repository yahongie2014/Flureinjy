@extends('layout.home')
@section('content')

    <section id="content" class="animated fadeIn">
        {!! Form::open()!!}

        <div class="panel mb35">
            <div class="panel-heading">
                <span class="panel-title">{{trans('admin.system_info')}}</span>
            </div>
            <div class="panel-body br-t">
                <div class="allcp-form theme-primary">

                    <div class="section row mb10">
                        <div class="tab-block mb25">
                            <ul class="nav nav-tabs tabs-border nav-justified">
                                <li class="active">
                                    <a href="#tab15_1" data-toggle="tab" aria-expanded="true">{{trans('admin.system_info')}}o</a>
                                </li>
                            </ul>


                            <div class="tab-content">

                                <div id="tab15_1" class="tab-pane active">

                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.mobile')}}</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field prepend-icon">
                                                    <input type="text" name="mobile" value="{{$all->mobile}}" id="mobile" class="gui-input" placeholder="{{trans('admin.mobilenumber')}}">
                                                    <label for="" class="field-icon">
                                                        <i class="fa fa-mobile"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.phone')}}</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field prepend-icon">
                                                    <input type="text" name="phone" id="" value="{{$all->phone}}" class="gui-input" placeholder="{{trans('admin.phonenumber')}}">
                                                    <label for="" class="field-icon">
                                                        <i class="fa fa-phone"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.address')}}</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field prepend-icon">
                                                    <textarea class="form-control" name="address" id="textArea2" rows="3">{{$all->address}}</textarea>
                                                    <label for="firstname" class="field-icon">
                                                        <i class="fa fa-map-marker"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.notemail')}}</label>

                                            <div class="col-sm-9 ph10">
                                                <label class="field prepend-icon">
                                                    <input type="text" name="email" value="{{$all->email}}" id="" class="gui-input" placeholder="{{trans('admin.email')}}">
                                                    <label for="" class="field-icon">
                                                        <i class="fa fa-envelope-o"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.default_status')}}</label>

                                        <div class="col-sm-9 ph10">
                                            <label class="field prepend-icon">
                                                <input type="text" name="order_status" value="{{$all->order_status}}" id="mobile" class="gui-input" placeholder="{{trans('admin.default_status')}}">
                                                <label for="" class="field-icon">
                                                    <i class="fa fa-mobile"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>


                                </div>

                            </div>
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
                    <div class="col-sm-3 col-sm-offset-3">
                        <input type="submit" class="btn btn-lg btn-block btn-success" value="{{trans('admin.savesetting')}}" >
                    </div>
                    <div class="col-sm-3 ">
                        <a href="" class="btn btn-lg btn-block btn-danger">{{trans('admin.cancel')}}</a>
                    </div>
                </div>
                {!! Form::close()!!}
            </div>
        </div>
    </section>

@stop