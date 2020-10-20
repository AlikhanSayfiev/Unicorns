<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormatRequest;
use App\Http\Resources\FormatResource;
use Illuminate\Http\Request;
use App\Models\Format;

class FormatController extends Controller
{
    public function index()
    {
        $formats = Format::all();
        return FormatResource::collection($formats);
    }

    public function create(FormatRequest $request)
    {   
        $format = Format::insert($request->all());
        if (!$format) return response()->json(['success' => false], 500);

        return response()->json(['success' => true], 200);
    }

    public function update(FormatRequest $request, int $id)
    {
        $find = Format::find($id);
        if (!$find) return response()->json(['success' => false, 'error' => 'Format not found !'], 404);

        $response = $find->update($request->all());

        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $format = Format::find($id);
        if (!$format) return response()->json(['status' => false, 'error' => 'Format not found !'], 404);

        if ($format->status == "published") {
            $response = $format->update(['status' => 'trash']);
        } else if ($format->status == "trash") {
            $response = $format->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
