<?php

namespace App\Http\Controllers;

use App\Http\Requests\TitleRequest;
use App\Http\Resources\TitleResource;
use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    public function index()
    {
        $titles = Title::all();
        return TitleResource::collection($titles);
    }

    public function create(TitleRequest $request)
    {   
        $find = Title::where('lang', $request->lang)->where('block', $request->block)->first();
        if ($find) return response()->json(['success' => false, 'error' => 'The block has already been taken'], 409);
        
        $title = Title::insert($request->all());
        if (!$title) return response()->json(['success' => false], 500);

        return response()->json(['success' => true], 200);
    }

    public function update(TitleRequest $request, int $id)
    {
        $find = Title::find($id);
        if (!$find) return response()->json(['success' => false, 'error' => 'Title not found !'], 404);

        $response = $find->update($request->all());

        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $title = Title::find($id);
        if (!$title) return response()->json(['status' => false, 'error' => 'Title not found !'], 404);

        if ($title->status == "published") {
            $response = $title->update(['status' => 'trash']);
        } else if ($title->status == "trash") {
            $response = $title->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
