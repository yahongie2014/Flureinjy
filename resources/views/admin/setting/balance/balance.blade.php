@extends('layout.home')
@section('content')



    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="text-dark pl25 fw700 fs35">
                Balance
            </div>
            <div class="panel-menu allcp-form theme-primary mtn">

                <div class="row">
                    <div class="col-md-6 ">
                        <a href="{{url('add/balance')}}" class="btn btn-info br2 btn-lg"> <i class="fa fa-plus"></i> {{trans('admin.add_balance')}}</a>
                    </div>
                </div>
            </div>
            <div class="panel-body pn">
                <div class="table-responsive">
                    <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                        <thead>
                        <tr class="bg-light">
                            <th class="text-center">{{trans('admin.id')}}</th>
                            <th class="text-center">{{trans('admin.balance')}}</th>
                            <th class="text-center">{{trans('admin.date')}}</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($balances as $balance)
                            <tr>
                                <td class="text-center">
                                    {{$balance->id}}

                                </td>
                                <td class="text-center">
                                    {{$balance->balance}}
                                </td>
                                <td class="text-center">
                                    {{$balance->date_se}}
                                </td>

                            </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>



@stop