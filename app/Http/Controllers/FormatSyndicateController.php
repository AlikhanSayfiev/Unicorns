<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormatSyndicateRequest;
use App\Http\Resources\FormatSyndicateResource;
use App\Models\FormatSyndicate;
use Illuminate\Http\Request;

class FormatSyndicateController extends Controller
{
    public function index()
    {
        $syndicates = FormatSyndicate::all();
        return FormatSyndicateResource::collection($syndicates);
    }

    public function create(FormatSyndicateRequest $request)
    {   
        $syndicate = FormatSyndicate::insert($request->all());
        if (!$syndicate) return response()->json(['success' => false], 500);

        return response()->json(['success' => true], 200);
    }

    public function update(FormatSyndicateRequest $request, int $id)
    {
        $find = FormatSyndicate::find($id);
        if (!$find) return response()->json(['success' => false, 'error' => 'FormatSyndicate not found !'], 404);

        $response = $find->update($request->all());

        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $syndicate = FormatSyndicate::find($id);
        if (!$syndicate) return response()->json(['status' => false, 'error' => 'FormatSyndicate not found !'], 404);

        if ($syndicate->status == "published") {
            $response = $syndicate->update(['status' => 'trash']);
        } else if ($syndicate->status == "trash") {
            $response = $syndicate->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
