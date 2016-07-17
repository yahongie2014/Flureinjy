@extends('layout.home')
@section('content')
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290" data-chute-height="match">
            {!! Form::open(['method'=>'get','url'=>'expenses_search'])!!}
            <!-- -------------- Menu Block -------------- -->
            <div class="allcp-form theme-primary">

                <h5 class="pln"> {{trans('admin.filter_expenses')}}</h5>

                <h6 class="mb15"> by Expenses ID</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="search_id" id="order-id" class="gui-input" placeholder="#{{trans('admin.expenses_id')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-tag"></i>
                        </label>
                    </label>
                </div>

                <h6 class="mb15">{{trans('admin.by_supplier_name')}}</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="search_name" id="order-id" class="gui-input" placeholder="{{trans('admin.supplier_name')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>

                <h6 class="mb15">{{trans('admin.by_date')}}</h6>

                <div class="section row mb20">
                    <div class="col-md-6 ph10">
                        <label for="datepicker1" class="field prepend-icon mb5">
                            <input type="date" id="datepicker1" name="search_from" class="gui-input fs13" placeholder="{{trans('admin.from')}}">
                            <label class="field-icon">
                                <i class="fa fa-calendar"></i>
                            </label>
                        </label>
                    </div>
                    <div class="col-md-6 ph10">
                        <label for="datepicker2" class="field prepend-icon mb5">
                            <input type="date" id="datepicker2" name="search_to" class="gui-input fs13" placeholder="{{trans('admin.to')}}">
                            <label class="field-icon">
                                <i class="fa fa-calendar"></i>
                            </label>
                        </label>
                    </div>
                </div>


                <hr class="short">

                <div class="section">
                    <input type="submit" class="btn btn-primary pull-right ph30" value="{{trans('admin.search')}}">
                </div>

            </div>
            {!! Form::close()!!}
        </aside>
        <!-- -------------- /Column Left -------------- -->

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center pt30">

            <!-- -------------- Recent Orders -------------- -->
            <div class="panel">
                <div class="text-dark pl25 fw700 fs35">
                    Expenses
                </div>
                <div class="panel-menu allcp-form theme-primary mtn">

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <div class="text-dark pl25 fw300 fs35">
                                {{trans('admin.total')}}: <span>
                                    @foreach($sum as $total)
                                        {{$total->total_sales}}
                                    @endforeach
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                            <thead>
                            <tr class="bg-light">
                                <th class="text-center">{{trans('admin.expenses_id')}}</th>
                                <th class="text-center">{{trans('admin.employee')}}</th>
                                <th class="text-center">{{trans('admin.supplier_name')}}</th>
                                <th class="text-center">{{trans('admin.date')}}</th>
                                <th class="text-center">{{trans('admin.amount_le')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($expand as $ex)
                                <tr>
                                    <td class="text-center">{{$ex->id}}</td>
                                    <td class="text-center"><span>{{$ex->employee}}</span></td>
                                    <td class="text-center"><span>{{$ex->supplier_name}}</span></td>
                                    <td class="text-center"><span>{{$ex->created_at->format(('d-m-Y   h:i a'))}}</span></td>
                                    <td class="text-center"><span>{{$ex->amount}}</span></td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>

@stop