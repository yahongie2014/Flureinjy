@extends('layout.home')
@section('content')
    <section id="content" class="animated fadeIn">

        <div class="panel mb35">
            <div class="panel-heading">
                <span class="panel-title">{{trans('admin.add_order_status')}}</span>
            </div>
            <div class="panel-body br-t">
                <div class="allcp-form theme-primary">

                    <div class="section row mb10">
                        <div class="tab-block mb25">
                            <ul class="nav nav-tabs tabs-border nav-justified">
                                <li class="active">
                                    <a href="#tab15_1" data-toggle="tab" aria-expanded="true">{{trans('admin.order_status')}}</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab15_1" class="tab-pane active">


                                {!! Form::open(['url'=>'order_status']) !!}
                                    <div class="section row mb10">
                                        <div class="col-sm-6">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.order_status')}}:</label>

                                            <div class="col-sm-9 ph10">
                                                <input type="text" name="order_status" id="" class="gui-input" placeholder="{{trans('admin.order_status')}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="submit" class="btn btn-info br2 btn-m" value=" {{trans('admin.add_status')}}">
                                        </div>
                                    </div>
                                    {!! Form::close() !!}

                                    <div class="section row mb10 mt50">
                                        <div class="col-sm-6">
                                            <div class="table-responsive">
                                                <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                                                    <thead>
                                                    <tr class="bg-light">
                                                        <th class="text-center">{{trans('admin.status')}}</th>
                                                        <th class="text-center">Remove</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($status as $stat)
                                                    <tr>

                                                        <td class="text-center">{{$stat->order_status}}</td>
                                                        <td class="text-center"><a href="{{url('remove_order_status/'.$stat->id)}}" class=""> <i class="fa fa-trash"></i> {{trans('admin.remove')}} {{trans('admin.status')}}</a></td>
                                                    </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
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