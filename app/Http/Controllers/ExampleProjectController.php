<?php

namespace App\Http\Controllers;

use App\Models\ExampleProject;
use Illuminate\Http\Request;

class ExampleProjectController extends Controller
{
    public function index()
    {
        $project = ExampleProject::all();
        return response()->json($project);
    }

    public function create(Request $request)
    {   
        $project = ExampleProject::insert($request->all());
        if (!$project) return response()->json(['success' => false], 500);

        return response()->json(['success' => true], 200);
    }

    public function update(Request $request, int $id)
    {
        $find = ExampleProject::find($id);
        if (!$find) return response()->json(['success' => false, 'error' => 'ExampleProject not found !'], 404);

        $response = $find->update($request->all());

        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $project = ExampleProject::find($id);
        if (!$project) return response()->json(['status' => false, 'error' => 'ExampleProject not found !'], 404);

        if ($project->status == "published") {
            $response = $project->update(['status' => 'trash']);
        } else if ($project->status == "trash") {
            $response = $project->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
