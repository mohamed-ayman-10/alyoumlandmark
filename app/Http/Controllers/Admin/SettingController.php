<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Trait\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::query()->first();
        return view('admin.pages.setting.index', compact('setting'));
    }

    public function update(SettingRequest $request)
    {
        try {
            $setting = Setting::query()->first();
            $data = $request->except('_token', 'logo', 'favicon');
            if ($request->hasFile('logo')) {
                FileUpload::Delete($setting->logo);
                $data['logo'] = FileUpload::File('images/setting', $request->file('logo'));
            }
            if ($request->hasFile('favicon')) {
                FileUpload::Delete($setting->favicon);
                $data['favicon'] = FileUpload::File('images/setting', $request->file('favicon'));
            }

            Setting::query()->update($data);
            return back()->with('success', __('Update Successfully'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
