<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public static function set()
    {
        return Setting::orderBy('id','desc')->first();

    }
   public function info()
   {
      $all= Setting::orderBy('id','desc')->first();
       return view('admin.setting.info.info',['title'=> trans('admin.setting_info'),'all'=>$all]);
   }


  public function update(Request $request)
  {
      $update = Setting::find(SettingController::set()->id);
      $update->mobile = $request->input('mobile');
      $update->phone = $request->input('phone');
      $update->email = $request->input('email');
      $update->address = $request->input('address');
      $update->order_status = $request->input('order_status');
      $update->save();
      session()->flash('success',trans('admin.systemupdated'));
      return redirect()->back();

  }

}
