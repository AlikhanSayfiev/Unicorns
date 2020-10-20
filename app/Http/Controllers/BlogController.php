<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\BlogRequest;
use App\Http\Resources\BlogResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $opinion = Blog::all();
        return BlogResource::collection($opinion);
    }

    public function create(BlogRequest $request)
    {   
        $data = $request->all();

        if ($request->hasFile('image')) {
            $save = Storage::putFile('public/blogs', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else return response()->json([
            'success' => false, 'error' => 'Image required !'
        ], 422);

        Blog::insert($data);
        return response()->json(['success' => true], 201);
    }

    public function update(BlogRequest $request, int $id)
    {   
        $blog = Blog::find($id);
        if (!$blog) return response()->json(['status' => false, 'error' => 'Blog not found !'], 404);
        $data = $request->all();

        if ($request->file('image') and $request->hasFile('image')) {

            if (Storage::exists("public/" . str_replace("/storage/", "", $blog->image))) {
                $delete = Storage::delete("public/" . str_replace("/storage/", "", $blog->image));
                if (!$delete) return response()->json([
                    'success' => false, 'error' => 'Image not deleted !'
                ], 500);
            }

            $save = Storage::putFile('public/blogs', $request->file('image'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Image not uploaded !'
            ], 500);

            $data['image'] = Storage::url($save);

        } else $data['image'] = $blog->image;

        $response = $blog->update($data);
        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $blog = Blog::find($id);
        if (!$blog) return response()->json(['status' => false, 'error' => 'Blog not found !'], 404);

        if ($blog->status == "published") {
            $response = $blog->update(['status' => 'trash']);
        } else if ($blog->status == "trash") {
            $response = $blog->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
