<?php

namespace App\Http\Controllers;

use App\Extra;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExtraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $extra= Extra::all();
        return view('admin.setting.extras.extras',['title'=>trans('admin.extras'),'extra'=>$extra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.setting.extras.add_extra',['title'=>trans('admin.add_extra')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $rules=[
            'name'=>'required',
        ];
        $validate = Validator::make($request->all(),$rules);
        $validate->SetAttributeNames([
            'name'=> trans('admin.extra_name'),


        ]);
        if($validate->fails()){
            return redirect()->back()->withInput()->withErrors($validate);
        }else{
            $add = new Extra();
            $add->name = $request->input('name');
            if($request->input('payment_method') !==null) {
                $add->type = implode(',',$request->input('type'));
            }else {
                $add->type = '';
            }

            $add->save();
            session()->flash('success',trans('admin.added'));

            return redirect('extra');

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
        $single_extra= Extra::find($id);

        return view('admin.setting.extras.single_extra',['title'=>trans('admin.show_extra'),'single'=>$single_extra]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $single_extra= Extra::find($id);
        return view('admin.setting.extras.edit',['title'=>trans('admin.edit_extra'),'single'=>$single_extra]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request ,$id)
    {
        $single_extra= Extra::find($id);
        $single_extra->name = $request->input('extra');

        $single_extra->type = implode(",",$request->input('extra_type_value'));

        $single_extra->save();
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
        $delete = Extra::find($id);
        $delete->delete();
        session()->flash('success',trans('admin.success'));
        return redirect('extra');

    }
}
