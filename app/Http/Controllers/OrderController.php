<?php

namespace App\Http\Controllers;

use App\Extra;
use App\Flowers;
use App\Order;
use App\OrderStatus;
use App\OrderType;
use App\Payment;
use App\Setting;
use App\TimeLine;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Excel;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
public function csv()
{
   
}





    public function search(Request $request)
    {
        $status = OrderStatus::all();

        $result = Order::where(function($q) use($request) {
            If ($request->has('search_id')) {
                $q->where('id', '=', $request->input('search_id'));

            }

            If($request->has('search_low') && $request->has('search_high')) {
                $q->whereBetween('budget',array($request->input('search_low'),$request->input('search_high')));
            }

            If($request->has('search_from') && $request->has('search_to')) {
                $q->whereBetween('date_se',array($request->input('search_from'),$request->input('search_to')));
            }
        })->get();

        return view('admin.order.search_order',['title'=>trans('admin.search'),'orders'=>$result,'status'=>$status]);

    }
    public function index()
    {
        if(auth()->user()->role == 'admin' or auth()->user()->role == 'sales') {

            $orders = Order::all();
        $status = OrderStatus::all();
        return view('admin.order.show_all',['title'=>trans('admin.showall_order'),'orders'=>$orders,'status'=>$status]);
        }else{
            return"peeeeep";
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
            $sales = \DB::table('users')->where('role','sales')->get();
         $flowers= Flowers::all();
        $order_type= OrderType::all();
        $setting=Setting::find(1);


        $extra = Extra::all();
        return view('admin.order.add_order',['title'=>trans('admin.add_order'),
            'flowers'=>$flowers,'order_type'=>$order_type,
            'extra'=>$extra,
            'sales'=>$sales,
            'setting'=>$setting
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->role == 'admin' or auth()->user()->role == 'sales') {
            $date = date('Y-m-d');

            $add = new Order();
            $add->date_se = $date;
        if($request->input('payment') !==null) {
            $add->order_way = $request->input('payment');
        }else{
            $add->order_way='';
        }

            if($request->input('sales_person') !==null) {
                $add->sales_person = $request->input('sales_person');
            }else{
                $add->sales_person='';
            }


            $add->client_name = $request->input('client_name');
            $add->email = $request->input('email');
        $add->phone = $request->input('phone_number');
        $add->mobile = $request->input('mobile_number');
        $add->client_id = $request->input('client_id');
        $add->address = $request->input('client_address');
            if($request->input('order_type') !==null) {
                $add->order_type = $request->input('order_type');
            }else{
                $add->order_type='';
            }
            if($request->input('order_container') !==null) {
                $add->container = $request->input('order_container');
            }else{
                $add->container='';
            }



        if($request->input('flower') !==null) {
            $add->flower_type = implode(',',$request->input('flower'));
        }else{
            $add->flower_type='';
        }
        if($request->input('color') !==null) {
            $add->flower_color = implode(',',$request->input('color'));
        }else{
            $add->flower_color='';
        }
         $add->flower_budget = $request->input('flower_budget');
        if($request->input('extra_name') !==null) {
            $add->extra_name = implode(',',$request->input('extra_name')) ;
        }else{
            $add->extra_name='';
        }
        if($request->input('extra_type') !==null) {
            $add->extra_type = implode(',',$request->input('extra_type'));
        }else{
            $add->extra_type='';
        }

        if($request->input('extra_amount') !==null) {
            $add->amount = implode(',',$request->input('extra_amount')) ;
        }else{
            $add->amount='';
        }

        if($request->input('budget') !==null) {
            $add->extra_budget = implode(',',$request->input('budget')) ;
        }else{
            $add->extra_budget='';
        }
            if($request->input('name') !==null) {
                $add->delivery_name = $request->input('name');
            }else{
                $add->delivery_name='';
            }
            if($request->input('phone') !==null) {
                $add->delivery_phone = $request->input('phone');
            }else{
                $add->delivery_phone='';
            }
            if($request->input('phone') !==null) {
                $add->delivery_phone = $request->input('phone');
            }else{
                $add->delivery_phone='';
            }
            if($request->input('address') !==null) {
                $add->delivery_address = $request->input('address');
            }else{
                $add->delivery_address='';
            }
            if($request->input('delivery_budget') !==null) {
                $add->delivery_budget = $request->input('delivery_budget');
            }else{
                $add->delivery_budget='';
            }
            if($request->input('delivery_notes') !==null) {
                $add->delivery_notes = $request->input('delivery_notes');
            }else{
                $add->delivery_notes='';
            }
            if($request->input('pickup_date') !==null) {
                $add->pickup_date = $request->input('pickup_date');
            }else{
                $add->pickup_date='';
            }
            if($request->input('pickup_time') !==null) {
                $add->pickup_time = $request->input('pickup_time');
            }else{
                $add->pickup_time='';
            }

        if($request->input('ontime') !== null) {
            $add->ontime = $request->input('ontime');
        }else{
            $add->ontime='';
        }


            if($request->input('message_card') !==null) {
                $add->message_card = $request->input('message_card');
            }else{
                $add->message_card='';
            }
            if($request->input('notes') !==null) {
                $add->notes = $request->input('notes');
            }else{
                $add->notes='';
            }
            if($request->input('total_budget') !==null) {
                $add->budget = $request->input('total_budget');
            }else{
                $add->budget='';
            }
            if($request->input('remain') !==null) {
                $add->remain = $request->input('remain');
            }else{
                $add->remain='';
            }
            if ($request->input('remain')==0) {
                $add->ordertype = 'Completed';
            }else{
                $add->ordertype = 'Pending';

            }


            $add->save();
            $payment = new Payment();
            $payment->order_id = $order = Order::all()->last()->id;
            $payment->cash = $request->input('cash');
            $payment->visa = $request->input('visa');
            $payment->remain = $request->input('remain');
            $payment->save();

            session()->flash('success',trans('admin.added'));
        if($request->input('another')) {
            return redirect()->back();
        }else{
            $order = Order::all()->last();
            return view('admin.order.print_order',['title'=>'print_order','order'=>$order]);
        }
        }else{
            return"peeeeep";
        }

    }

    public function single_order($id)
        {
            $order = Order::find($id);
            $time_line = TimeLine::where('order_id','=',$id)->get();
            return view('admin.order.show_order',['title'=>trans('admin.show_order'),
                'order'=>$order,
                'time_line'=>$time_line
            ]);

        }
public function edit($id)
{
    $single = Order::find($id);
    $sales = \DB::table('users')->where('role','sales')->get();
    $flowers= Flowers::all();
    $order_type= OrderType::all();

    $extra = Extra::all();
    $setting=Setting::find(1);


    return view('admin.order.edit_order',['title'=>trans('admin.edit_order'),
        'single'=>$single,
        'flowers'=>$flowers,'order_type'=>$order_type,
        'extra'=>$extra,
        'sales'=>$sales,
        'setting'=>$setting

    ]);


}
    public function update(Request $request,$id)
    {
        $add = Order::find($id);
        $timeline = new TimeLine();
        $timeline->order_id = $id;

        if($request->input('payment') !==null) {
            $add->order_way = $request->input('payment');
            $timeline->order_way = $request->input('payment');

        }else{
            $add->order_way='';
            $timeline->order_way='';
        }
        $add->sales_person = $request->input('sales_person');

        $timeline->sales_person = $request->input('sales_person');

        $add->client_name = $request->input('client_name');
        $timeline->client_name = $request->input('client_name');

        $add->phone = $request->input('phone_number');
        $timeline->phone = $request->input('phone_number');

        $add->mobile = $request->input('mobile_number');
        $timeline->mobile = $request->input('mobile_number');
////
        $add->client_id = $request->input('client_id');
        $timeline->client_id = $request->input('client_id');

        $add->address = $request->input('client_address');
        $timeline->address = $request->input('client_address');

        $add->order_type = $request->input('order_type');
        $timeline->order_type = $request->input('order_type');

        $add->container = $request->input('order_container');
        $timeline->container = $request->input('order_container');
        if($request->input('order_type') !==null) {
            $add->order_type = $request->input('order_type');
            $timeline->order_type = $request->input('order_type');
        }else{
            $add->order_type='';
            $timeline->order_type='';
        }
        if($request->input('flower') !==null) {
            $add->flower_type = implode(',',$request->input('flower'));
            $timeline->flower_type = implode(',',$request->input('flower'));
        }else{
            $add->flower_type='';
            $timeline->flower_type='';
        }
        if($request->input('color') !==null) {
            $add->flower_color = implode(',',$request->input('color'));
            $timeline->flower_color = implode(',',$request->input('color'));
        }else{
            $add->flower_color='';
            $timeline->flower_color='';
        }
        $add->flower_budget = $request->input('flower_budget');
        $timeline->flower_budget = $request->input('flower_budget');
        if($request->input('extra_name') !==null) {
            $add->extra_name = implode(',',$request->input('extra_name')) ;
            $timeline->extra_name = implode(',',$request->input('extra_name')) ;
        }else{
            $add->extra_name='';
            $timeline->extra_name='';
        }
        if($request->input('extra_type') !==null) {
            $add->extra_type = implode(',',$request->input('extra_type'));
            $timeline->extra_type = implode(',',$request->input('extra_type'));
        }else{
            $add->extra_type='';
            $timeline->extra_type='';
        }

        if($request->input('extra_type') !==null) {
            $add->amount = implode(',',$request->input('extra_amount')) ;
            $timeline->amount = implode(',',$request->input('extra_amount')) ;
        }else{
            $add->amount='';
            $timeline->amount='';
        }

        if($request->input('extra_type') !==null) {
            $add->extra_budget = implode(',',$request->input('budget')) ;
            $timeline->extra_budget = implode(',',$request->input('budget')) ;
        }else{
            $add->extra_budget='';
            $timeline->extra_budget='';
        }
        $add->delivery_name = $request->input('name');
        $timeline->delivery_name = $request->input('name');

        $add->delivery_phone = $request->input('phone');
        $timeline->delivery_phone = $request->input('phone');

        $add->delivery_address = $request->input('address');
        $timeline->delivery_address = $request->input('address');

        $add->delivery_notes = $request->input('delivery_notes');
        $timeline->delivery_notes = $request->input('delivery_notes');

        $add->delivery_budget = $request->input('delivery_budget');
        $timeline->delivery_budget = $request->input('delivery_budget');

        $add->delivery_notes = $request->input('delivery_notes');
        $timeline->delivery_notes = $request->input('delivery_notes');

        $add->pickup_date = $request->input('pickup_date');
        $timeline->pickup_date = $request->input('pickup_date');

        $add->pickup_date = $request->input('pickup_time');
        $timeline->pickup_date = $request->input('pickup_time');

        if($request->input('ontime') !== null) {
            $add->ontime = $request->input('ontime');
            $timeline->ontime = $request->input('ontime');
        }else{
            $add->ontime='';
            $timeline->ontime='';
        }


        $add->message_card = $request->input('message_card');
        $timeline->message_card = $request->input('message_card');

        $add->notes = $request->input('notes');
        $timeline->notes = $request->input('notes');


        $add->save();
        $timeline->save();




        session()->flash('success',trans('admin.added'));
        if($request->input('another')) {
            return redirect()->back();
        }else{
            return redirect('show_all_orders');
        }

    }

    public function delivery()
    {
        $orders = \DB::table('order')->where('ordertype','=', 'Delivered')->get();
            //Order::where('ordertype','Delivery')->get();
        $status = OrderStatus::all();
        return view('admin.order.delivery_order',['title'=>trans('admin.showall_order'),'orders'=>$orders,'status'=>$status]);
    }
    public function update_order(Request $request,$id)
    {
        if($request->ajax()){

            if($request->has('ordertype')){
                $new= Order::find($id);
                $new->ordertype = $request->input('ordertype');
                $new->save();

                return response()->ajax($new);

            }
        }
    }


    
    public function timeline($id)
    {
        $order = TimeLine::find($id);
        return view('admin.order.timeline',['title'=>trans('admin.timeline'),'order'=>$order]);
    }
}
