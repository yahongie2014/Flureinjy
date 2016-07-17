<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    public function index()
    {

        $customers = Customer::paginate(20);

        return view('admin.customer.customer',['title'=>trans('admin.customers'),'customers'=>$customers]);
    }

    public function create()
    {
        return view('admin.customer.add_customer',['title'=>trans('admin.add_customer')]);

    }

    // find customer
    public function get_customer(Request $request){

        if($request->ajax()){

            if($request->has('mobile_number')){

                $data = $request->input('mobile_number');
               $customer_data =Customer::where('mobile',$data)->first();
               return $customer_data;
               //return response()->ajax($customer_data);

            }
        }
    }

    public function store(Request $request)
    {
        $rules=[
            'name'=>'required',
            'mobile'=>'required',
            'email'=>'required',
        ];
        $validate = Validator::make($request->all(),$rules);
        $validate->SetAttributeNames([
            'name'=> trans('admin.customer_name'),
            'phone'=> trans('admin.phone'),
            'mobile'=> trans('admin.phone'),
            'client_id'=> trans('admin.phone'),
            'email'=> trans('admin.phone'),
            'address'=> trans('admin.phone'),

        ]);
        if($validate->fails()){
            return redirect()->back()->withInput()->withErrors($validate);
        }else{
            $add = new Customer();
            $add->name = $request->input('name');
            $add->phone = $request->input('phone');
            $add->mobile = $request->input('mobile');
            $add->email = $request->input('email');
            $add->address = $request->input('address');
            $add->date_se = date("Y-m-d");

            $add->save();
            session()->flash('success',trans('admin.added'));
            if($request->input('another'))
            {
                return redirect()->back();


            }elseif ($request->input('to_order')){
                return redirect('add_order');

            }elseif ($request->input('save_customer')){
                return redirect('add_order');
            } else{
                return redirect('customer');

            }

        }



    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.single_customer',['title'=>trans('admin.show_customer'),'customer'=>$customer]);
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customer.edit_customer',['title'=>trans('admin.edit_customer'),'customer'=>$customer]);
    }


    public function update(Request $request,$id)
    {
        $single_customer= Customer::find($id);
        $single_customer->name = $request->input('name');
        $single_customer->phone = $request->input('phone');
        $single_customer->mobile = $request->input('mobile');
        $single_customer->email = $request->input('email');
        $single_customer->address = $request->input('address');


        $single_customer->save();
        session()->flash('success',trans('admin.updated'));
        return redirect()->back();
    }


    public function customer_report()
    {   $date = date('Y-m');

        $sum = DB::table('order')
            ->select( DB::raw('SUM(budget) as total_sales'))
            ->where('date_se','like','%'.$date.'%')
            ->get();
        $payment= Order::where('date_se','like','%'.$date.'%')->get();
        return view('admin.report.customer.customer',['title'=>trans('admin.search'),'payments'=>$payment,'total'=>$sum]);
    }
    public function search(Request $request)
    {
        $result = Order::where(function($q) use($request) {
            If ($request->has('search_id')) {
                $q->where('id', '=', $request->input('search_id'));
            }

            If ($request->has('search_name')) {
                $q->where('client_name', 'like', '%'.$request->input('search_name').'%');
            }

            If($request->has('search_from') && $request->has('search_to')) {
                $q->whereBetween('date_se',array($request->input('search_from'),$request->input('search_to')));
            }
        })->get();


        return view('admin.report.customer.customer_search',['title'=>trans('admin.search'),'payments'=>$result]);

    }

    public function destroy($id)
    {
        $delete = Customer::find($id);
        $delete->delete();
        session()->flash('success',trans('admin.delete'));
        return redirect('customer');


    }
    // find customer with name
    public function get_name(Request $request){

        if($request->ajax()){

            if($request->has('client_name')){

                $data = $request->input('client_name');
                $customer_data =Customer::where('name',$data)->first();
                return $customer_data;
                //return response()->ajax($customer_data);

            }
        }
    }
}
