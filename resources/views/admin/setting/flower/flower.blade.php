@extends('layout.home')
@section('content')



    <section id="content" class="animated fadeIn">
        <div class="panel">
            <div class="text-dark pl25 fw700 fs35">
                {{trans('admin.flowers')}}
            </div>
            <div class="panel-menu allcp-form theme-primary mtn">

                <div class="row">
                    <div class="col-md-6 ">
                        <a href="{{url('add_flower')}}" class="btn btn-info br2 btn-lg"> <i class="fa fa-plus"></i> {{trans('admin.add_flower')}}</a>
                    </div>
                </div>
            </div>
            <div class="panel-body pn">
                <div class="table-responsive">
                    <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                        <thead>
                        <tr class="bg-light">
                            <th class="text-center">{{trans('admin.flower_name')}}</th>
                            <th class="text-center">{{trans('admin.available_color')}}</th>
                            <th class="text-center">{{trans('admin.show')}}</th>
                            <th class="text-center">{{trans('admin.edit')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($flowers as $flower)
                            <tr>
                                <td class="text-center">
                                    {{$flower->name}}

                                </td>
                                <td class="text-center">
                                    {{$flower->color}}

                                </td>
                                <td class="text-center">
                                    <a href="{{ url('flower/show/'.$flower->id)}}" class="btn btn-info br2 btn-m"> {{trans('admin.show')}}</a>

                                </td>
                                <td class="text-center">
                                    <a href="{{ url('edit_flower/edit/'.$flower->id)}}" class="btn btn-info br2 btn-m"> {{trans('admin.edit')}}</a>

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