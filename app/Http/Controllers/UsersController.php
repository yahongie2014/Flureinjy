<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.users',['title'=>trans('admin.users'),'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.users.add_user',['title'=>trans('admin.add_user')]);
    }


    public function store(Request $request)
    {
        $rules=[
          'email'=>'required|email|unique:users,email',
            'name'=>'required|unique:users,name',
            'role'=>'required',
            'password'=>'required'
        ];
        $val = Validator::make($request->all(),$rules);
        if($val->fails())
        {
            return redirect()->back()->withInput()->withErrors($val);
        }else{
            $new_user = new User();
            $new_user->name = $request->input('name');
            $new_user->full_name = $request->input('full_name');
            $new_user->email = $request->input('email');
            $new_user->role = $request->input('role');
            $new_user->password = bcrypt($request->input('password'));
            $new_user->save();
            session()->flash('success',trans('admin.success'));
            if($request->input('another')){
                return redirect()->back();
            }else{
                return redirect('users');
            }


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
        $user = User::find($id);
        return view('admin.users.single_user',['title'=>trans('admin.single_user'),'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit_user',['title'=>trans('admin.edit_user'),'user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $rules=[
            'email'=>'required|email',
            'name'=>'required',
            'role'=>'required',
            'password'=>'required'
        ];
        $val = Validator::make($request->all(),$rules);
        if($val->fails())
        {
            return redirect()->back()->withInput()->withErrors($val);
        }else{
            $new_user = User::find($id);
            $new_user->name = $request->input('name');
            $new_user->full_name = $request->input('full_name');
            $new_user->email = $request->input('email');
            $new_user->role = $request->input('role');
            $new_user->password = bcrypt($request->input('password'));
            $new_user->save();
            session()->flash('success',trans('admin.success'));

                return redirect()->back();

        }
    }

    public function search(Request $request)
    {
        // Perform the query using Query Builder
        $result = User::where(function($q) use($request) {
            If ($request->has('id_search')) {
                 $q->where('id', '=', $request->input('id_search'));
            }

            If ($request->has('name_search')) {
                $q->where('name', 'like', '%'.$request->input('name_search').'%');
            }
        })->get();


        return view('admin.users.search_user',['title'=>trans('admin.search'),'users'=>$result]);
        }
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        session()->flash('success',trans('admin.success'));
        return redirect('users');



    }


}
