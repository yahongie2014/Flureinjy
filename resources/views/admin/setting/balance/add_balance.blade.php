@extends('layout.home')
@section('content')


<section id="content" class="animated fadeIn">

    <div class="panel mb35">
        <div class="panel-heading">
            <span class="panel-title">{{trans('admin.add_extra')}}</span>
        </div>
        <div class="panel-body br-t">
            {!! Form::open(['url'=>'add/balance']) !!}

            <div class="allcp-form theme-primary">

                <div class="section row mb10">
                    <div class="tab-block mb25">
                        <ul class="nav nav-tabs tabs-border nav-justified">
                            <li class="active">
                                <a href="#tab15_1" data-toggle="tab" aria-expanded="true">{{trans('admin.balance')}}</a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <div id="tab15_1" class="tab-pane active">

                                <div class="section row mb10">
                                    <div class="col-sm-6">
                                        <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.balance')}}:</label>

                                        <div class="col-sm-9 ph10">
                                            <input type="text" name="balance" id="" class="gui-input" placeholder="{{trans('admin.balance')}}">
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>

                    </div>
                </div>
                <div class="section row mb10">
                    <div class="col-sm-2">
                        <input type="submit" class="btn btn-success br2 btn-lg" value="{{trans('admin.save')}}">
                    </div>

                    <div class="col-sm-2">
                        <a href="" class="btn btn-danger br2 btn-lg"> {{trans('admin.cancel')}}</a>
                    </div>
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</section>
@stop