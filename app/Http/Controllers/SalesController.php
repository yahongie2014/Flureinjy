<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
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
        $orders =Order::where('date_se','like','%'.$date.'%');
        return view('admin.report.sales.sales',['title'=>trans('admin.search'),'orders'=>$orders,'total'=>$sum]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function search(Request $request)
    {
        $result = Order::where(function($q) use($request) {
            If ($request->has('search_id')) {
                $q->where('id', '=', $request->input('search_id'));

            }

            If ($request->has('search_name')) {
                $q->where('sales_person', 'like', '%'.$request->input('search_name').'%');
            }

            If($request->has('search_from') && $request->has('search_to')) {
                $q->whereBetween('date_se',array($request->input('search_from'),$request->input('search_to')));
            }
        })->get();

        return view('admin.report.sales.search_sales',['title'=>trans('admin.search'),'orders'=>$result]);

    }

}
