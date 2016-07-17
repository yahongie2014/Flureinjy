@extends('layout.home')
@section('content')

<section id="content" class="table-layout animated fadeIn">

    <!-- -------------- Column Left -------------- -->
    <aside class="chute chute-left chute290" data-chute-height="match">

        <!-- -------------- Menu Block -------------- -->
        {!! Form::open(['method'=>'get','url'=>'user_search'])!!}
        <div class="allcp-form theme-primary">

            <h5 class="pln"> {{trans('admin.filter_name')}}</h5>

            <h6 class="mb15">{{trans('admin.by_id')}}</h6>

            <div class="section mb20">
                <label for="order-id" class="field prepend-icon">
                    <input type="text" name="id_search" id="order-id" class="gui-input"  placeholder="#{{trans('admin.user_id')}}">
                    <label for="order-id" class="field-icon">
                        <i class="fa fa-tag"></i>
                    </label>
                </label>
            </div>

            <h6 class="mb15"> {{trans('admin.by_name')}}</h6>

            <div class="section mb20">
                <label for="order-id" class="field prepend-icon">
                    <input type="text" name="name_search" id="order-id" class="gui-input"  placeholder="{{trans('admin.user_name')}}">
                    <label for="order-id" class="field-icon">
                        <i class="fa fa-user"></i>
                    </label>
                </label>
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
                users
                <div class="row">
                    <a href="{{url('add_user')}}" class=" btn btn-info">{{trans('admin.new_user')}}</a>
                </div>
            </div>
            <div class="panel-body pn">
                <div class="table-responsive">
                    <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                        <thead>
                        <tr class="bg-light">
                            <th class="text-center">{{trans('admin.user_id')}}</th>
                            <th class="text-center">{{trans('admin.user_name')}}e</th>
                            <th class="text-center">{{trans('admin.full_name')}}</th>
                            <th class="text-center">{{trans('admin.email')}}</th>
                            <th class="text-center">{{trans('admin.type')}}</th>
                            <th class="text-center">{{trans('admin.show')}}</th>
                            <th class="text-center">{{trans('admin.edit')}}</th>
                            <th class="text-center">{{trans('admin.delete')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="text-center">{{$user->id}}</td>
                            <td class="text-center">{{ $user->name }}</td>
                            <td class="text-center">{{$user->full_name}}</td>
                            <td class="text-center">{{$user->email}}</td>
                            <td class="text-center">{{$user->role}}</td>
                            <td class="text-center"><a href="{{url('show/user/'.$user->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.show')}}</a></td>
                            <td class="text-center"><a href="{{url('edit_user/'.$user->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.edit')}}</a></td>
                            <td class="text-center"><a href="{{url('delete/user/'.$user->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.delete')}}</a></td>
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