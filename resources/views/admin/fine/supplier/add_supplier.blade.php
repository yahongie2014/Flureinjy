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

                    {!! Form::open(['url'=>'add_supplier']) !!}
                        <div class="panel mb35">
                            <div class="panel-heading" id="spy1">
                                <span class="panel-title">{{trans('admin.supplier_data')}}</span>
                            </div>
                            <div class="panel-body br-t">

                                <!-- -------------- Icons -------------- -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="supplier" id="firstname" class="gui-input" placeholder="{{trans('admin.supplier_name')}}">
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
                                                <input type="text" name="phone" id="" class="gui-input" placeholder="{{trans('admin.phone_number')}}">
                                                <label for="firstname" class="field-icon">
                                                    <i class="fa fa-phone"></i>
                                                </label>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="section">
                                            <label class="field prepend-icon">
                                                <input type="text" name="mobile" id="" class="gui-input" placeholder="{{trans('admin.mobile_number')}}">
                                                <label for="firstname" class="field-icon">
                                                    <i class="fa fa-mobile"></i>
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
                                        <input type="submit" class="btn btn-lg btn-block btn-success" value="{{trans('admin.save_supplier')}}" >
                                    </div>
                                    <div class="col-sm-4 ">
                                        <input type="submit" class="btn btn-lg btn-block btn-primary" name="another" value="{{trans('admin.add_another_supplier')}}" >
                                    </div>
                                    <div class="col-sm-4 ">
                                        <input type="reset" class="btn btn-lg btn-block btn-danger" value="{{trans('admin.reset')}}" >
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