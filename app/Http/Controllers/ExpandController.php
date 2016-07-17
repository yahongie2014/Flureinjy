<?php

namespace App\Http\Controllers;

use App\Expand;
use App\Supplier;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExpandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $date = date('Y-m');

        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->where('date_se','like','%'.$date.'%')
            ->get();
        $sups = Supplier::all();
      $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->where('date_se','like','%'.$date.'%')
            ->get();
        $expand= Expand::where('date_se','like','%'.$date.'%')->get();
        return view('admin.fine.expand.expand',['title'=>trans('admin.show_expenses'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance,
            'sups'=>$sups
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $sup = Supplier::all();
        return view('admin.fine.expand.add_expand',['title'=>trans('admin.add_expenses'),'sups'=>$sup]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $new = new Expand();
        $new->supplier_name= $request->input('supplier');
        $new->employee= $request->input('employee');
        $new->notes= $request->input('notes');
        $new->amount= $request->input('amount');
        $new->method= $request->input('method');
        $new->date_se = date('Y-m-d');
        $new->save();
        session()->flash('success',trans('admin.success'));
        if($request->input('another')) {
            return redirect()->back();
        }else{
            return redirect('expenses');
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
        $sup = Supplier::all();
        $all = Expand::all();
        return view('admin.fine.expand.edit_expand',['title'=>trans('admin.edit_expense'),'all'=>$all,'sups'=>$sup]);
    }

public function search(Request $request)
{
    $result = Expand::where(function($q) use($request) {
        If ($request->has('search_id')) {
            $q->where('id', '=', $request->input('search_id'));
        }

        If ($request->has('search_name')) {
            $q->where('supplier_name', 'like', '%'.$request->input('search_name').'%');
        }

        If($request->has('search_from') && $request->has('search_to')) {
            $q->whereBetween('date_se',array($request->input('search_from'),$request->input('search_to')));
        }
    })->get();
    $sum = Expand::where(function($q) use($request) {
        If ($request->has('search_id')) {
            $q->where('id', '=', $request->input('search_id'));
        }

        If ($request->has('search_name')) {
            $q->where('supplier_name', 'like', '%'.$request->input('search_name').'%');
        }

        If($request->has('search_from') && $request->has('search_to')) {
            $q->whereBetween('date_se',array($request->input('search_from'),$request->input('search_to')));
        }
    })->select( DB::raw('SUM(amount) as total_sales'))->get();


    return view('admin.fine.expand.expand_search',['title'=>trans('admin.search'),
        'expand'=>$result,
        'sum'=>$sum
        
    ]);

}

    public function last_year()
    {
        $end= new \DateTime(date("Y-m-d"));
        $begin =new \DateTime(date("Y-m-d",strtotime("-1 year")));
$s = $begin->format('Y');
        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->whereYear('date_se','=',$s)
            ->get();
        $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->whereYear('date_se','=',$s)
            ->get();
        $expand= Expand::whereYear('date_se','=',$s)
            ->get();
        return view('admin.fine.expand.last_year',['title'=>trans('admin.expense_last_year'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance
        ]);

    }
    public function current_year()
    {
        $end= new \DateTime(date("Y-m-d"));
        $s = $end->format('Y');
        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->whereYear('date_se','=',$s)
            ->get();
        $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->whereYear('date_se','=',$s)
            ->get();
        $expand= Expand::whereYear('date_se','=',$s)
            ->get();
        return view('admin.fine.expand.last_year',['title'=>trans('admin.expense_last_year'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance
        ]);

    }
    public function current_month()
    {

        $end= new \DateTime(date("Y-m-d"));
        $s = date('Y');
        $m = date('m');
        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->whereYear('date_se','=',$s)
            ->whereMonth('date_se','=',$m)
            ->get();
        $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->whereYear('date_se','=',$s)
            ->whereMonth('date_se','=',$m)

            ->get();
        $expand= Expand::whereYear('date_se','=',$s)
         ->whereMonth('date_se','=',$m)
            ->get();
        return view('admin.fine.expand.last_year',['title'=>trans('admin.expense_last_year'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance
        ]);
    }

    public function last_month()
    {
        $end= new \DateTime(date("Y-m-d"));
        $begin =new \DateTime(date("Y-m-d",strtotime("-30 day")));
        $y = $begin->format('Y');
        $m= $begin->format('m');
        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->whereYear('date_se','=',$y)
            ->whereMonth('date_se','=',$m)
            ->get();
        $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->whereYear('date_se','=',$y)
            ->whereMonth('date_se','=',$m)

            ->get();
        $expand= Expand::whereYear('date_se','=',$y)
            ->whereMonth('date_se','=',$m)
            ->get();
        return view('admin.fine.expand.last_year',['title'=>trans('admin.expense_last_year'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance
        ]);

    }
    public function current_week()
    {
        $end= new \DateTime(date("Y-m-d"));
        $begin =new \DateTime(date("Y-m-d",strtotime("-7 day")));
        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->whereBetween('date_se',array($begin,$end))
            ->get();
        $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->whereBetween('date_se',array($begin,$end))
            ->get();
        $expand= Expand::whereBetween('date_se',array($begin,$end))->get();
        return view('admin.fine.expand.last_year',['title'=>trans('admin.expense_last_year'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance
        ]);

    }
    public function last_week()
    {
        $end= new \DateTime(date("Y-m-d",strtotime("-7 day")));
        $begin =new \DateTime(date("Y-m-d",strtotime("-14 day")));
        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->whereBetween('date_se',array($begin,$end))
            ->get();
        $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->whereBetween('date_se',array($begin,$end))
            ->get();
        $expand= Expand::whereBetween('date_se',array($begin,$end))->get();
        return view('admin.fine.expand.last_year',['title'=>trans('admin.expense_last_year'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance
        ]);

    }
    public function today()
    {
        $s = date('Y-m-d');


        $sum = DB::table('expand')
            ->select( DB::raw('SUM(amount) as total_sales'))
            ->where('date_se',$s)
            ->get();
        $balance=  DB::table('balance')
            ->select( DB::raw('SUM(balance) as balance'))
            ->where('date_se','=',$s)
            ->get();
        $expand= Expand::where('date_se',$s)

            ->get();
        return view('admin.fine.expand.last_year',['title'=>trans('admin.expense_last_year'),
            'expand'=>$expand,
            'total'=>$sum,
            'balance_table'=>$balance
        ]);

    }
}
