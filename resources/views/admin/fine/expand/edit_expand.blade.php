@extends('layout.home')
@section('content')
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290 bg-primary" data-chute-height="match">

            <div class="chute-affix" data-spy="affix" data-offset-top="200">

                <div id="nav-spy">
                    <ul class="nav chute-nav" data-smoothscroll="-90">
                        <li class="active">
                            <a href="#spy1"> Add Expense</a>
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
                    {!! Form::open(['url'=>'edit/expenses/']) !!}

                    <div class="panel mb35">
                        <div class="panel-heading" id="spy7">
                            <span class="panel-title">{{trans('admin.add_expenses')}}</span>
                        </div>
                        <div class="panel-body br-t">
                            <div class="allcp-form theme-primary">

                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.supplier_name')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <select name="supplier" class="select2-single form-control">
                                            <option value="{{$all->supplier_name}}" selected >{{$all->supplier_name}}</option>
                                            @foreach($sups as $sup)
                                                <option value="{{$sup->supplier}}">{{$sup->supplier}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.employee')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <select name="employee" class="select2-single form-control">
                                            <option value="" selected disabled>{{trans('admin.employee')}}</option>
                                            <option value="crazy">crazy</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="section row mb10">
                                    <label for="store-currency" class="field-label col-sm-3 ph10 text-center">{{trans('admin.payment')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <div class="row">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.amount_paid')}}:</label>
                                            <div class="col-md-9">
                                                <label class="field prepend-icon">
                                                    <input type="text" name="amount" id="" class="gui-input" placeholder="{{trans('admin.amount_paid')}}">
                                                    <label for="" class="field-icon">
                                                        <i class="fa fa-money"></i>
                                                    </label>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.method')}}:</label>
                                            <div class="col-md-9">
                                                <select name="method" class="select2-single form-control">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Visa">Visa</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="section row mb10">
                                    <label class="field-label col-sm-3 ph10 text-center">{{trans('admin.notes')}}:</label>

                                    <div class="col-sm-9 ph10">
                                        <textarea class="form-control" name="notes" id="textArea2" rows="3"></textarea>

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
                                    <input type="submit" class="btn btn-lg btn-block btn-success" value="{{trans('admin.add_expenses')}}" Add Expense>
                                </div>
                                <div class="col-sm-4">
                                    <a href="" class="btn btn-lg btn-block btn-primary">{{trans('admin.add_another_expense')}}</a>
                                </div>
                                <div class="col-sm-4 ">
                                    <a href="" class="btn btn-lg btn-block btn-danger">{{trans('admin.reset')}}</a>
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