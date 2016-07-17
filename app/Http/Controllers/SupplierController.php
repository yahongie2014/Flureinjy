<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.fine.supplier.supplier',['title'=>trans('admin.suppliers'),'suppliers'=>$suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.fine.supplier.add_supplier',['title'=>trans('admin.add_supplier')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $new = new Supplier();
        $new->supplier= $request->input('supplier');
        $new->phone= $request->input('phone');
        $new->mobile= $request->input('mobile');
        $new->address= $request->input('address');
        $new->save();
        session()->flash('success',trans('admin.success'));
        if($request->input('another')){
        return redirect()->back();
        }else{
            return redirect('supplier');
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
        $supplier = Supplier::find($id);
        return view('admin.fine.supplier.single_supplier',['title'=>trans('admin.show_supplier'),'supplier'=>$supplier]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $edit = Supplier::find($id);
        $edit->supplier = $request->input('supplier');
        $edit->phone = $request->input('phone');
        $edit->mobile = $request->input('mobile');
        $edit->email = $request->input('email');
        $edit->supplier_id = $request->input('supplier_id');
        $edit->address = $request->input('address');
        $edit->save();
        session()->flash('success',trans('admin.success'));
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $supplier= Supplier::find($id);
        return view('admin.fine.supplier.edit_supplier',['title'=>trans('admin.suppliers'),'supplier'=>$supplier]);
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
