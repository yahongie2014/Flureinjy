@extends('layout.home')
@section('content')
    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Left -------------- -->
        <aside class="chute chute-left chute290" data-chute-height="match">

            <!-- -------------- Menu Block -------------- -->
            <div class="allcp-form theme-primary">

                <h5 class="pln"> {{trans('admin.filter_supplier')}}</h5>

                <h6 class="mb15"> by ID</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="# {{trans('admin.supplier_id')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-tag"></i>
                        </label>
                    </label>
                </div>

                <h6 class="mb15"> by Name</h6>

                <div class="section mb20">
                    <label for="order-id" class="field prepend-icon">
                        <input type="text" name="order-id" id="order-id" class="gui-input" placeholder="{{trans('admin.supplier_name')}}">
                        <label for="order-id" class="field-icon">
                            <i class="fa fa-user"></i>
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
                    Suppliers
                </div>
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table allcp-form theme-warning tc-checkbox-1 fs13 table-hover">
                            <thead>
                            <tr class="bg-light">
                                <th class="">{{trans('admin.supplier_id')}}</th>
                                <th class="">{{trans('admin.supplier_name')}}</th>
                                <th class="">{{trans('admin.phone')}}</th>
                                <th class="">{{trans('admin.mobile')}}</th>
                                <th class="">{{trans('admin.email')}}</th>
                                <th class="">{{trans('admin.remain')}}</th>
                                <th class="text-center">{{trans('admin.show')}}</th>
                                <th class="text-center">{{trans('admin.edit')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suppliers as $supplier)
                            <tr>
                                <td class=""><a href="">{{ $supplier->supplier_id }}</a></td>
                                <td class="w175"><a href=""><span>{{$supplier->supplier}}r</span></a></td>
                                <td class="">{{$supplier->phone}}</td>
                                <td class="">{{$supplier->mobile}}</td>
                                <td class="">{{$supplier->email}}</td>

                                <td class="">Remain</td>
                                <td class="text-center"><a href="{{url('supplier/show/'.$supplier->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.show')}}</a></td>
                                <td class="text-center"><a href="{{url('supplier/edit/'.$supplier->id)}}" class="btn btn-info br2 btn-xs"> {{trans('admin.edit')}}</a></td>
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