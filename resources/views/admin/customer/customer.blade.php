@extends('layout.home')
@section('content')
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290" data-chute-height="match">

            <!-- -------------- Menu Block -------------- -->
            <div class="allcp-form theme-primary">

                <h5 class="pln">{{trans('admin.filter_customer')}}</h5>

                <h6 class="mb15"> {{trans('admin.by_id')}}</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="{{trans('admin.customer_id')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-tag"></i>
                        </label>
                    </label>
                </div>

                <h6 class="mb15">{{trans('admin.by_name')}}</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="{{trans('admin.customer_name')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-user"></i>
                        </label>
                    </label>
                </div>

                <h6 class="mb15"> by Phone/mobile</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="{{trans('admin.customer_phone_mobile')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-phone"></i>
                        </label>
                    </label>
                </div>


                <hr class="short">

                <div class="section">
                    <button class="btn btn-primary pull-right ph30" type="button">{{trans('admin.search')}}</button>
                </div>

            </div>

        </aside>
        <!-- -------------- /Column Left -------------- -->

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center pt30">

            <!-- -------------- Recent Orders -------------- -->
            <div class="panel">
                <div class="text-dark pl25 fw700 fs35">
                    {{trans('admin.customers')}}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{url('add_customer')}}" class="btn btn-primary">{{trans('admin.new_customer')}}</a>
                    </div>

                </div>
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                            <thead>
                            <tr class="bg-light">
                                <th class="">{{trans('admin.customer_id')}}</th>
                                <th class="">{{trans('admin.customer_name')}}</th>
                                <th class="">{{trans('admin.phone')}}</th>
                                <th class="">{{trans('admin.mobile')}}</th>
                                <th class="">{{trans('admin.email')}}</th>
                                <th class="">{{trans('admin.add_date')}}</th>
                                <th class="text-center">{{trans('admin.delete')}}</th>
                                <th class="text-center">{{trans('admin.show')}}</th>
                                <th class="text-center">{{trans('admin.edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($customers as $customer)
                            <tr>

                                <td class="">{{$customer->id}}</td>
                                <td class="w175"><span>{{$customer->name}}</span></td>
                                <td class="">{{$customer->phone}}</td>
                                <td class="">{{$customer->mobile}}</td>
                                <td class="">{{$customer->email}}</td>
                                <td class="">{{$customer->created_at->format(('d-m-Y   h:i a'))}}</td>
                                <td class="text-center"><a href="{{url('delete/customer/'.$customer->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.delete')}}</a></td>
                                <td class="text-center"><a href="{{url('customer/show/'.$customer->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.show')}}</a></td>
                                <td class="text-center"><a href="{{url('customer/edit/'.$customer->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.edit')}}</a></td>
                            </tr>

                            @endforeach

                            </tbody>
                        </table>
                        <div>
                            {!! str_replace('/?','?',$customers->render())!!}
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>

@stop