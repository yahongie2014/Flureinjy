@extends('layout.home')
@section('content')



    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="text-dark pl25 fw700 fs35">
                Extras
            </div>
            <div class="panel-menu allcp-form theme-primary mtn">

                <div class="row">
                    <div class="col-md-6 ">
                        <a href="{{url('add_extra')}}" class="btn btn-info br2 btn-lg"> <i class="fa fa-plus"></i> {{trans('admin.add_extra')}}</a>
                    </div>
                </div>
            </div>
            <div class="panel-body pn">
                <div class="table-responsive">
                    <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                        <thead>
                        <tr class="bg-light">
                            <th class="text-center">{{trans('admin.extra_name')}}</th>
                            <th class="text-center">{{trans('admin.available_type')}}</th>
                            <th class="text-center">{{trans('admin.show')}}</th>
                            <th class="text-center">{{trans('admin.edit')}}</th>
                            <th class="text-center">{{trans('admin.delete')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($extra as $ex)
                                <tr>
                                    <td class="text-center">
                                        {{$ex->name}}

                                    </td>
                                    <td class="text-center">
                                        {{$ex->type}}

                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('extra/show/'.$ex->id)}}" class="btn btn-info br2 btn-m"> {{trans('admin.show')}}</a>

                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('extra/edit/'.$ex->id)}}" class="btn btn-info br2 btn-m"> {{trans('admin.edit')}}</a>

                                    </td>
                                    <td class="text-center">
                                        <a href="{{ url('extra/delete/'.$ex->id)}}" class="btn btn-info br2 btn-m"> {{trans('admin.delete')}}</a>

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