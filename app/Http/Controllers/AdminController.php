<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Expand;
use App\Order;
use App\OrderStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {


        $end= new \DateTime(date("Y-m-d"));
       $begin =new \DateTime(date("Y-m-d",strtotime("-1 week")));
        $orders = Order::whereBetween('date_se',array($begin,$end))->count();
        $orders_report = Order::whereBetween('date_se',array($begin,$end))->get();
        $customer = Customer::count();

        $sum = DB::table('order')
            ->select( DB::raw('SUM(budget) as total_sales'))
            ->whereBetween('date_se',array($begin,$end))
            ->get();
        $ex = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_pay'))
            ->whereBetween('date_se',array($begin,$end))
            ->get();
        $result = Order::whereBetween('date_se',array($begin,$end))->get();

        $daterange = new \DatePeriod($begin, new \DateInterval('P1D'), $end);

        foreach ($daterange as $date) {
            $dates[]=$date->format('Y-m-d');

            //   echo $date->format("Y-m-d")."<br/>";
            $chart_search[] = Order::
            selectRaw('sum(budget) as budgetsum')
                ->groupBy('date_se')
                ->where('date_se', '=', $date->format("Y-m-d"))
                ->lists('budgetsum')
                ->toArray();

        }
        foreach ($chart_search as $ch)
        {
            if (sizeof($ch)==0)
            {
                $ch=[0];
            }
            $x[] = implode(',',$ch);

        }
        /////////////////////////////////
        foreach ($daterange as $date) {

            //   echo $date->format("Y-m-d")."<br/>";

            $amount_sum[] = Expand::
            selectRaw('sum(amount) as amoutn_sor')
                ->groupBy('date_se')
                ->where('date_se', '=', $date->format("Y-m-d"))
                ->lists('amoutn_sor')
                ->toArray();

        }
        foreach ($amount_sum as $amount_s)
        {
            if (sizeof($amount_s)==0)
            {
                $amount_s=[0];
            }
            $amount_chart[] = implode(',',$amount_s);

        }
        $order_status= OrderStatus::all();


        return view('admin.index',['title'=>trans('admin.dash'),
            'orders'=>$orders,
            'customer'=>$customer,
            'total'=>$sum,
            'ex'=>$ex,
            'result'=>$result,
            'expens_char'=>$amount_chart,
            'payment_chart'=>$x,
            'chart_date'=>$dates,
            'order_reports'=>$orders_report,
            'status'=>$order_status

        ]);






    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dash_search(Request $request)
    {
          $orders = Order::where(function($q) use($request) {
              $q->whereBetween('date_se',array($request->input('from'),$request->input('to')));

          })->count();
          $customer = Customer::count();

          $sum = DB::table('order')
              ->select( DB::raw('SUM(budget) as total_sales'))
              ->whereBetween('date_se',array($request->input('from'),$request->input('to')))
              ->get();
          $ex = DB::table('expand')
              ->select( DB::raw('SUM(amount) as total_pay'))
              ->whereBetween('date_se',array($request->input('from'),$request->input('to')))
              ->get();
          $result = Order::where(function($q) use($request) {

              If($request->has('from') && $request->has('to')) {
                  $q->whereBetween('date_se',array($request->input('from'),$request->input('to')));
              }
          })->get();

        $begin = new \DateTime($request->input('from'));
        $end = new \DateTime($request->input('to'));

        $daterange = new \DatePeriod($begin, new \DateInterval('P1D'), $end);

        foreach ($daterange as $date) {
            $dates[]=$date->format("Y-m-d");

            //   echo $date->format("Y-m-d")."<br/>";
            $chart_search[] = Order::
            selectRaw('sum(budget) as budgetsum')
                ->groupBy('date_se')
                ->where('date_se', '=', $date->format("Y-m-d"))
                ->lists('budgetsum')
                ->toArray();

        }
        foreach ($chart_search as $ch)
        {
            if (sizeof($ch)==0)
            {
                $ch=[0];
            }
            $x[] = implode(',',$ch);

        }
        /////////////////////////////////
        foreach ($daterange as $date) {

            //   echo $date->format("Y-m-d")."<br/>";

            $amount_sum[] = Expand::
            selectRaw('sum(amount) as amoutn_sor')
                ->groupBy('date_se')
                ->where('date_se', '=', $date->format("Y-m-d"))
                ->lists('amoutn_sor')
                ->toArray();

        }
        foreach ($amount_sum as $amount_s)
        {
            if (sizeof($amount_s)==0)
            {
                $amount_s=[0];
            }
            $amount_chart[] = implode(',',$amount_s);

        }
        $orders_report = Order::whereBetween('date_se',array($begin,$end))->get();

        $order_status= OrderStatus::all();

      return view('admin.dash_search',['title'=>trans('admin.dash_search'),
            'orders'=>$orders,
            'customer'=>$customer,
            'total'=>$sum,
            'ex'=>$ex,
            'result'=>$result,
            'expens_char'=>$amount_chart,
            'payment_chart'=>$x,
          'chart_date'=>$dates,
          'order_reports'=>$orders_report,
          'status'=>$order_status

        ]);

 


    }







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
