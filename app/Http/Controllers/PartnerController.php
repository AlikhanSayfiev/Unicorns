<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerRequest;
use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PartnerController extends Controller
{
    public function index()
    {
        $partner = Partner::all();
        return PartnerResource::collection($partner);
    }

    public function create(PartnerRequest $request)
    {   
        $data = $request->all();

        if ($request->hasFile('image')) {
            $save = Storage::putFile('public/partners', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else return response()->json([
            'success' => false, 'error' => 'Image required !'
        ], 422);

        Partner::insert($data);
        return response()->json(['success' => true], 201);
    }

    public function update(PartnerRequest $request, int $id)
    {   
        $partner = Partner::find($id);
        if (!$partner) return response()->json(['status' => false, 'error' => 'Partner not found !'], 404);
        $data = $request->all();

        if ($request->file('image') and $request->hasFile('image')) {

            if (Storage::exists("public/" . str_replace("/storage/", "", $partner->image))) {
                $delete = Storage::delete("public/" . str_replace("/storage/", "", $partner->image));
                if (!$delete) return response()->json([
                    'success' => false, 'error' => 'Image not deleted !'
                ], 500);
            }

            $save = Storage::putFile('public/partners', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else $data['image'] = $partner->image;

        $response = $partner->update($data);
        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $partner = Partner::find($id);
        if (!$partner) return response()->json(['status' => false, 'error' => 'Partner not found !'], 404);

        if ($partner->status == "published") {
            $response = $partner->update(['status' => 'trash']);
        } else if ($partner->status == "trash") {
            $response = $partner->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
