<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\ServiceRequest;
use App\Http\Resources\ServiceResource;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return ServiceResource::collection($service);
    }

    public function create(ServiceRequest $request)
    {   
        $data = $request->all();

        if ($request->hasFile('icon')) {
            $save = Storage::putFile('public/services', $request->file('icon'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Icon not uploaded !'
            ], 500);

            $data['icon'] = Storage::url($save);

        } else return response()->json([
            'success' => false, 'error' => 'Icon required !'
        ], 422);

        Service::insert($data);
        return response()->json(['success' => true], 201);
    }

    public function update(ServiceRequest $request, int $id)
    {   
        $service = Service::find($id);
        if (!$service) return response()->json(['status' => false, 'error' => 'Service not found !'], 404);
        $data = $request->all();

        if ($request->file('icon') and $request->hasFile('icon')) {

            if (Storage::exists("public/" . str_replace("/storage/", "", $service->icon))) {
                $delete = Storage::delete("public/" . str_replace("/storage/", "", $service->icon));
                if (!$delete) return response()->json([
                    'success' => false, 'error' => 'Icon not deleted !'
                ], 500);
            }

            $save = Storage::putFile('public/services', $request->file('icon'), Str::uuid());
            if (!$save) return response()->json([
                'success' => false, 'error' => 'Icon not uploaded !'
            ], 500);

            $data['icon'] = Storage::url($save);

        } else $data['icon'] = $service->icon;

        $response = $service->update($data);
        return response()->json(['success' => $response], 200);
    }

    public function delete(int $id)
    {
        $service = Service::find($id);
        if (!$service) return response()->json(['status' => false, 'error' => 'Service not found !'], 404);

        if ($service->status == "published") {
            $response = $service->update(['status' => 'trash']);
        } else if ($service->status == "trash") {
            $response = $service->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
