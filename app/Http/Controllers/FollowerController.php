<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FollowerController extends Controller
{
    public function index()
    {
        $follower = Follower::all();
        return response()->json($follower);
    }

    public function create(Request $request)
    {   
        $data = $request->all();

        if ($request->hasFile('image')) {
            $save = Storage::putFile('public/followers', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else return response()->json([
            'success' => false, 'error' => 'Image required !'
        ], 422);

        Follower::insert($data);
        return response()->json(['success' => true], 201);
    }

    public function update(Request $request, int $id)
    {   
        $follower = Follower::find($id);
        if (!$follower) return response()->json(['status' => false, 'error' => 'Follower not found !'], 404);
        $data = $request->all();

        if ($request->file('image') and $request->hasFile('image')) {

            if (Storage::exists("public/" . str_replace("/storage/", "", $follower->image))) {
                $delete = Storage::delete("public/" . str_replace("/storage/", "", $follower->image));
                if (!$delete) return response()->json([
                    'success' => false, 'error' => 'Image not deleted !'
                ], 500);
            }

            $save = Storage::putFile('public/followers', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else $data['image'] = $follower->image;

        $response = $follower->update($data);
        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $follower = Follower::find($id);
        if (!$follower) return response()->json(['status' => false, 'error' => 'Follower not found !'], 404);

        if ($follower->status == "published") {
            $response = $follower->update(['status' => 'trash']);
        } else if ($follower->status == "trash") {
            $response = $follower->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
