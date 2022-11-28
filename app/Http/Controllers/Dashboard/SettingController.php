<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class SettingController extends Controller
{

    public function update(Request $request, Setting $setting)
    {

        // $validateedData=$request->validate([
        //     'image'=>'required|image',
        //     'facebook'=>'nullable|string',
        //     'instgram'=>'nullable|string',
        //     'phone'=>'numeric|nullable',
        //     'email'=>'email|nullable',
        // ]);
        $data = [
            'logo' => 'nullable|image',
            'facebook' => 'nullable|string',
            'instgram' => 'nullable|string',
            'phone' => 'string|nullable',
            'email' => 'email|nullable',
        ];
        foreach (config('app.languge') as $key => $value) {
            $data[$key . '*.title'] = 'nullable|string';
            $data[$key . '*.contant'] = 'nullable|string';
            $data[$key . '*.address'] = 'nullable|string';
        }
        $validateedData = $request->validate($data);
        // $setting->update($request->except('logo', 'favicon', '_token'));
        $logo = $request->file('logo');
        $info = $request->all();
        if ($request->hasFile('logo')) {
            $logourl = $logo->store('logo', 'public');
            $info['logo'] = $logourl;
        }
        $favicon=$request->file('favicon');
        if($request->hasFile('favicon')){
            $faviconurl=$favicon->store('favicon','public');
            $info['favicon']=$faviconurl;
        }


        $setting->update($info);
        return redirect()->route('dashboard.setting');
    }
}
