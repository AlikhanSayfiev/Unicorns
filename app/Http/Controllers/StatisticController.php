<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Http\Requests\StatRequest;
use App\Http\Resources\StatResource;

class StatisticController extends Controller
{
    public function index()
    {
        $stat = Statistic::all();
        return StatResource::collection($stat);
    }

    public function create(StatRequest $request)
    {
        Statistic::insert($request->all());
        return response()->json(['success' => true]);
    }

    public function update(StatRequest $request, int $id)
    {
        $stat = Statistic::find($id);
        if (!$stat) return response()->json(['status' => false, 'error' => 'Statistic not found !'], 404);

        $response = $stat->update($request->all());
        return response()->json(['success' => $response]);
    }

    public function delete(int $id)
    {
        $stat = Statistic::find($id);
        if (!$stat) return response()->json(['status' => false, 'error' => 'Statistic not found !'], 404);

        if ($stat->status == "published") {
            $response = $stat->update(['status' => 'trash']);
        } else if ($stat->status == "trash") {
            $response = $stat->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
