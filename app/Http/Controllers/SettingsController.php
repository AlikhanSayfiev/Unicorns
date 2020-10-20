<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SettingsController extends Controller
{
    public function index()
    {
        return response()->json(Settings::get(), 200);
    }

    public function update(Request $request, int $id)
    {   
        $settings = Settings::find($id);
        if (!$settings) return response()->json(['status' => false, 'error' => 'Settings not found !'], 404);
        $data = $request->all();

        if ($request->file('headerimage') and $request->hasFile('headerimage')) {

            if ($settings->headerimage and Storage::exists("public/" . str_replace("/storage/", "", $settings->headerimage))) {
                $delete = Storage::delete("public/" . str_replace("/storage/", "", $settings->headerimage));
                if (!$delete) return response()->json([
                    'success' => false, 'error' => 'Image not deleted !'
                ], 500);
            }

            $save = Storage::putFile('public/settings', $request->file('headerimage'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['headerimage'] = Storage::url($save);

        } else $data['headerimage'] = $settings->headerimage;

        if ($request->file('middleimage') and $request->hasFile('middleimage')) {

            if ($settings->middleimage and Storage::exists("public/" . str_replace("/storage/", "", $settings->middleimage))) {
                $delete = Storage::delete("public/" . str_replace("/storage/", "", $settings->middleimage));
                if (!$delete) return response()->json([
                    'success' => false, 'error' => 'Image not deleted !'
                ], 500);
            }

            $save = Storage::putFile('public/settings', $request->file('middleimage'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['middleimage'] = Storage::url($save);

        } else $data['middleimage'] = $settings->middleimage;

        $response = $settings->update($data);
        return response()->json(['success' => $response], 200);
    }
}
