
    <!-- -------------- Sidebar  -------------- -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- -------------- Sidebar Left Wrapper  -------------- -->
        <div class="sidebar-left-content nano-content">


            <!-- -------------- Sidebar Menu  -------------- -->
            <ul class="nav sidebar-menu">

                <li class="active">
                    <a href="{{url('dashboard')}}">
                        <span class="fa fa-dashboard"></span>
                        <span class="sidebar-title">{{trans('admin.home')}}</span>
                    </a>
                </li>
                <li>
                    <a class="accordion-toggle">
                        <span class="fa fa-th-list"></span>
                        <span class="sidebar-title">{{trans('admin.order')}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        @if(auth()->user()->role =='sales' or auth()->user()->role =='admin')

                        <li>
                            <a href="{{url('add_order')}}">
                                <span class="glyphicon glyphicon-modal-window"></span>{{trans('admin.add_order')}} </a>
                        </li>
                        <li>
                            <a href="{{url('show_all_orders')}}">
                                <span class="glyphicon glyphicon-book"></span> {{trans('admin.view_order')}} </a>
                        </li>
                        @endif

                        <li>
                            <a href="{{url('delivery/order')}}">
                                <span class="glyphicon glyphicon-book"></span> {{trans('admin.delivery_order')}} </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle">
                        <span class="fa fa-th-list"></span>
                        <span class="sidebar-title">{{trans('admin.supplier')}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">

                            <li>
                                <a href="{{url('add_supplier')}}">
                                    <span class="glyphicon glyphicon-modal-window"></span>{{trans('admin.add_supplier')}} </a>
                            </li>
                            <li>
                                <a href="{{url('supplier')}}">
                                    <span class="glyphicon glyphicon-book"></span> {{trans('admin.supplier')}} </a>
                            </li>


                    </ul>
                </li>
                @if(auth()->user()->role =='sales' or auth()->user()->role =='admin')
                <li>
                    <a class="accordion-toggle">
                        <span class="fa fa-users"></span>
                        <span class="sidebar-title">{{trans('admin.customer')}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{url('customer')}}">
                                <span class="glyphicon glyphicon-book"></span> {{trans('admin.view_customer')}} </a>
                        </li>
                        <li>
                            <a href="{{url('add_customer')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.add_customer')}} </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->user()->role =='expenses' or auth()->user()->role =='admin')

                <li>
                    <a class="accordion-toggle">
                        <span class="fa fa-money"></span>
                        <span class="sidebar-title">{{trans('admin.fin')}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{url('payment')}}">
                                <span class="glyphicon glyphicon-book"></span> {{trans('admin.payment')}} </a>
                        </li>
                        <li>
                            <a href="{{url('expenses')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.expense')}} </a>
                        </li>
                        <li>
                            <a href="{{url('add_expenses')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.add_expense')}} </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->user()->role=='admin')

                <li>
                    <a class="accordion-toggle">
                        <span class="fa fa-line-chart"></span>
                        <span class="sidebar-title">{{trans('admin.report')}}</span>
                        <span class="caret"></span>
                    </a>

                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{url('sales_report')}}">
                                <span class="glyphicon glyphicon-book"></span>{{trans('admin.sales_report')}} </a>
                        </li>
                        <li>
                            <a href="{{url('customer_report')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.customer_report')}} </a>
                        </li>
                        <li>
                            <a href="{{url('expenses')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.expense_report')}} </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="accordion-toggle">
                        <span class="fa fa-user-secret"></span>
                        <span class="sidebar-title">{{trans('admin.users')}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{url('users')}}">
                                <span class="glyphicon glyphicon-book"></span>{{trans('admin.show_users')}} </a>
                        </li>
                        <li>
                            <a href="{{url('add_user')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.add_user')}} </a>
                        </li>

                    </ul>

                </li>

                <li>
                    <a class="accordion-toggle">
                        <span class="fa fa-cogs"></span>
                        <span class="sidebar-title">{{trans('admin.system_setting')}}</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('balance') }}">
                                <span class="glyphicon glyphicon-book"></span> {{trans('admin.balance')}} </a>
                        </li>
                        <li>
                            <a href="{{ url('info') }}">
                                <span class="glyphicon glyphicon-book"></span> {{trans('admin.setting_info')}} </a>
                        </li>
                        <li>
                            <a href="{{url('extra')}}">
                                <span class="glyphicon glyphicon-modal-window"></span>{{ trans('admin.order_extra') }} </a>
                        </li>
                        <li>
                            <a href="{{url('flowers')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.flowers')}} </a>
                        </li>
                        <li>
                            <a href="{{url('order_type')}}">
                                <span class="glyphicon glyphicon-modal-window"></span> {{trans('admin.order_type')}} </a>
                        </li>
                        <li>
                            <a href="{{url('order_status')}}">
                                <span class="glyphicon glyphicon-modal-window"></span>{{trans('admin.order_status')}} </a>
                        </li>

                    </ul>
                </li>
                @endif

            </ul>
            <!-- -------------- /Sidebar Menu  -------------- -->

        </div>
        <!-- -------------- /Sidebar Left Wrapper  -------------- -->

    </aside>
    <!-- -------------- /Sidebar -------------- -->