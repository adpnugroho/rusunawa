<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }

    public function index()
    {
        $settings = Setting::all();
        return view('backend.settings.v_index', compact('settings'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'key' => ['required'],
        ]);

        $setting->update($request->all());

        return redirect()->route('settings.index')->with('success', 'Pengaturan berhasil diperbarui');
    }
}
