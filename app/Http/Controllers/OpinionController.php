<?php

namespace App\Http\Controllers;

use App\Http\Requests\OpinionRequest;
use App\Http\Resources\OpinionResource;
use App\Models\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OpinionController extends Controller
{
    public function index()
    {
        $opinion = Opinion::all();
        return OpinionResource::collection($opinion);
    }

    public function create(OpinionRequest $request)
    {   
        $data = $request->all();

        if ($request->hasFile('image')) {
            $save = Storage::putFile('public/opinions', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else return response()->json([
            'success' => false, 'error' => 'Image required !'
        ], 422);

        Opinion::insert($data);
        return response()->json(['success' => true], 201);
    }

    public function update(OpinionRequest $request, int $id)
    {   
        $opinion = Opinion::find($id);
        if (!$opinion) return response()->json(['status' => false, 'error' => 'Opinion not found !'], 404);
        $data = $request->all();

        if ($request->file('image') and $request->hasFile('image')) {

            if (Storage::exists("public/" . str_replace("/storage/", "", $opinion->image))) {
                $delete = Storage::delete("public/" . str_replace("/storage/", "", $opinion->image));
                if (!$delete) return response()->json([
                    'success' => false, 'error' => 'Image not deleted !'
                ], 500);
            }

            $save = Storage::putFile('public/opinions', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else $data['image'] = $opinion->image;

        $response = $opinion->update($data);
        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $opinion = Opinion::find($id);
        if (!$opinion) return response()->json(['status' => false, 'error' => 'Opinion not found !'], 404);

        if ($opinion->status == "published") {
            $response = $opinion->update(['status' => 'trash']);
        } else if ($opinion->status == "trash") {
            $response = $opinion->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
