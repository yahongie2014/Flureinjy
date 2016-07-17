<?php

namespace App\Http\Controllers;

use App\OrderType;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $orders= OrderType::all();
        return view('admin.setting.order_type.order_type',['title'=>trans('admin.add_order_type'),'orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.setting.order_type.add_order_type',['title'=>trans('admin.add_order_type')]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $rules=[
            'order_type'=>'required',
        ];
        $validate = Validator::make($request->all(),$rules);
        $validate->SetAttributeNames([
            'order_type'=> trans('admin.order_type'),


        ]);
        if($validate->fails()){
            return redirect()->back()->withInput()->withErrors($validate);
        }else{
            $add = new OrderType();
            $add->order_type = $request->input('order_type');
            $add->options = implode('-',$request->input('option'));

            $add->save();
            session()->flash('success',trans('admin.added'));
            return redirect()->back();

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
        $order_type = OrderType::find($id);
        return view('admin.setting.order_type.single_order',['title'=>trans('admin.show_order'),'order_type'=>$order_type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $order_type=OrderType::find($id);
        return view('admin.setting.order_type.edit_order',['title'=>trans('admin.edit_order_type'),'order_type'=>$order_type]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update( Request $request,$id)
    {
        $single_order_type= OrderType::find($id);
        $single_order_type->order_type = $request->input('order_type');
if($request->input('option_value') !==null) {
    $single_order_type->options = implode(",", $request->input('option_value'));
}else{
    $single_order_type->options='';
}

        $single_order_type->save();
        session()->flash('success',trans('admin.updated'));
        return redirect()->back();
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
