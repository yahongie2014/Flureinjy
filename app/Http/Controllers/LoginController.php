<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if(auth()->user()){
            return redirect('dashboard');
        }else {
            return view('login', ['title' => trans('admin.login')]);
        }
    }
    public function post_login(Request $request)
    {
        $rules = [
            'email'=>'required|email',
            'password'=>'required'

        ];
        $val = Validator::make($request->all(),$rules);
        if($val->fails())
        {
            return redirect()->back()->withInput()->withErrors($val);


        }else{
            if($request->input('remember')) {
                $remember = true;
            } else{
                $remember = false;
            }
            if(auth()->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember)){

                return redirect('dashboard');

            }else{
                session()->flash('error',trans('admin.errorlogindata'));
                return redirect()->back();

            }

        }

    }
    public function logout()
    {
        auth()->logout();
        return redirect('login');
    }


}
