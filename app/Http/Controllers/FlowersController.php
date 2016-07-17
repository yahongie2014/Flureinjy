<?php

namespace App\Http\Controllers;

use App\Flowers;
use Illuminate\Http\Request;
use Validator;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FlowersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $flowers= Flowers::all();
        return view('admin.setting.flower.flower',['title'=>trans('admin.flowers'),'flowers'=>$flowers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.setting.flower.add_flower',['title'=>trans('admin.add_flower')]);

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
            'color'=>'required'
        ];
        $validate = Validator::make($request->all(),$rules);
        $validate->SetAttributeNames([
            'name'=> trans('admin.flower_name'),
            'color'=> trans('admin.type'),


        ]);
        if($validate->fails()){
            return redirect()->back()->withInput()->withErrors($validate);
        }else{
            $add = new Flowers();
            $add->name = $request->input('name');
            $add->color = implode(',',$request->input('color'));

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
        $single_flower = Flowers::find($id);
        return view('admin.setting.flower.single_flower',['title'=>trans('admin.show_flower'),'single'=>$single_flower]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $single_flower = Flowers::find($id);
        return view('admin.setting.flower.edit_flower',['title'=>trans('admin.edit_flower'),'single'=>$single_flower]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $single_color= Flowers::find($id);
        $single_color->name = $request->input('flower_name');

        $single_color->color = implode(",",$request->input('flower_color_value'));

        $single_color->save();
        session()->flash('success',trans('admin.updated'));
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */

}
