<?php

namespace App\Http\Controllers;

use App\Extra;
use App\Flowers;
use App\Order;
use App\OrderType;
use App\Setting;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
        return view('admin.order.quick_order',['title'=>trans('admin.quick_order'),
            'flowers'=>$flowers,'order_type'=>$order_type,
            'extra'=>$extra,
            'sales'=>$sales,
            'setting'=>$setting
        ]);


    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        if(auth()->user()->role == 'admin' or auth()->user()->role == 'sales') {

            $add = new Order();
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
            $add->ordertype = $request->input('ordertype');
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
            if($request->input('amount_payment') !==null) {
                $add->amount_paid = implode(',',$request->input('amount_payment')) ;
            }else{
                $add->amount_paid='';
            }
            if($request->input('method_payment') !==null) {
                $add->method = implode(',',$request->input('method_payment')) ;
            }else{
                $add->method='';
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



            $add->save();
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
