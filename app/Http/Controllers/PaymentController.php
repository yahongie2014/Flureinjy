<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Payment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $date = date('Y-m');

        $sum = DB::table('order')
            ->select( DB::raw('SUM(budget) as total_sales'))
            ->where('date_se','like','%'.$date.'%')
            ->get();
        $payment= Order::where('date_se','like','%'.$date.'%')->get();
        return view('admin.fine.payment.payment',['title'=>trans('admin.payment'),'payments'=>$payment,'total'=>$sum]);
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
        $sum = Order::where(function($q) use($request) {
            If ($request->has('search_id')) {

                $q->where('id', '=', $request->input('search_id'));
            }

            If ($request->has('search_name')) {
                $q->where('client_name', 'like', '%' . $request->input('search_name') . '%');
            }

            If ($request->has('search_from') && $request->has('search_to')) {
                $q->whereBetween('date_se', array($request->input('search_from'), $request->input('search_to')));
            }
        })->select( DB::raw('SUM(budget) as total_sales'))->get();


        return view('admin.fine.payment.search_payment',['title'=>trans('admin.search'),'payments'=>$result,'sum'=>$sum]);

    }

    public function payment()
    {
        return view('admin.fine.payment.add_payment',['title'=>trans('admin.add_payment')]);
    }
    public function get_date(Request $request){

        if($request->ajax()){

            if($request->has('order_id')){

                $data = $request->input('order_id');
                $order =Order::where('id',$data)->first();
                return $order;
                //return response()->ajax($customer_data);

            }
        }

    }

    public function add_payment(Request $request)
    {
        $new_payment = new Payment();
        $new_payment->order_id = $request->input('order_id');
        $new_payment->cash = $request->input('cash');
        $new_payment->visa = $request->input('visa');
        $new_payment->remain = $request->input('remain');
        $new_payment->save();
        session()->flash('success',trans('admin.added'));
        return redirect('payment');
    }




}
