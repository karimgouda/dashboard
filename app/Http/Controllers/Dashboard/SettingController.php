<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function update(Request $request ,Setting $setting){

        $data =[
            'logo'=>'nullable|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'favicon'=>'nullable|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'facebook'=>'nullable|string',
            'instagram'=>'nullable|string',
            'phone'=>'nullable|string',
            'email'=>'nullable|email',
        ];

        foreach ( config('app.languages') as $key=>$value ) {
            $data[$key.'*.title'] = 'nullable|string';
            $data[$key.'*.content'] = 'nullable|string';
            $data[$key.'*.address'] = 'nullable|string';
        }
        $validateData = $request->validate($data);
        $setting->update($request->except('logo','favicon','_token'));

        if($request->file('logo')){
            $file = $request->file('logo');
          $fileName = Str::uuid(). $file->getClientOriginalName();
          $file->move(public_path('images'),$fileName);
          $path = '/images/'.$fileName;
            $setting->update(['logo'=>$path]);
        }


        if($request->file('favicon')){
            $file = $request->file('favicon');
          $fileName = Str::uuid(). $file->getClientOriginalName();
          $file->move(public_path('images'),$fileName);
          $path = '/images/'.$fileName;
            $setting->update(['favicon'=>$path]);
        }


          return redirect()->route('dashboard.settings');
    }
}
