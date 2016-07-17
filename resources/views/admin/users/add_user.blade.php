@extends('layout.home')
@section('content')

    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290 bg-primary" data-chute-height="match">

            <div class="chute-affix" data-spy="affix" data-offset-top="200">

                <div id="nav-spy">
                    <ul class="nav chute-nav" data-smoothscroll="-90">
                        <li class="active">
                            <a href="#spy1"> {{trans('admin.user_data')}}</a>
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
                    {!! Form::open(['url'=>'add_user']) !!}

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy1">
                            <span class="panel-title">{{trans('admin.user_data')}}</span>
                        </div>
                        <div class="panel-body br-t">

                            <!-- -------------- Icons -------------- -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="text" name="full_name" id="full_name" class="gui-input" placeholder="{{trans('admin.full_name')}}">
                                            <label for="name" class="field-icon">
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
                                            <input type="text" name="name" id="name" class="gui-input" placeholder="{{trans('admin.user_name')}}">
                                            <label for="name" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- -------------- Formats -------------- -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input" placeholder="{{trans('admin.email')}}">
                                            <label for="email" class="field-icon">
                                                <i class="fa fa-envelope-o"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section">
                                        <label class="field prepend-icon">
                                            <input type="password" name="password" id="password" class="gui-input" placeholder="{{trans('admin.password')}}">
                                            <label for="password" class="field-icon">
                                                <i class="fa fa-question"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="section row mb10">
                                    <label for="store-currency" class="field-label col-sm-3 ph10 text-center">{{trans('admin.type')}}</label>

                                    <div class="col-sm-9 ph10">
                                        <select name="role" class="select2-single form-control">
                                            <option selected disabled>{{trans('admin.add_user_role')}}</option>
                                            <option value="admin">{{trans('admin.admin')}}</option>
                                            <option value="sales">{{trans('admin.sales')}}</option>
                                            <option value="expenses">{{trans('admin.expenses')}}</option>
                                        </select>
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
                                    <input type="submit" name="another" class="btn btn-lg btn-block btn-danger" value="{{trans('admin.add_another_user')}}">
                                </div>

                                <div class="col-sm-4 ">
                                    <input type="reset" class="btn btn-lg btn-block btn-danger" value="{{trans('admin.cancel')}}">
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