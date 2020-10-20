<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Http\Resources\MenuResource;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $menus = Menu::all();
        return MenuResource::collection($menus);
    }

    public function create(Request $request)
    { 
        Menu::insert($request->all());
        return response()->json(['success' => true]);
    }

    public function update(Request $request, int $id)
    {
        $menu = Menu::find($id);
        if (!$menu) return response()->json(['status' => false, 'error' => 'Menu not found !'], 404);

        $response = $menu->update($request->all());
        return response()->json(['success' => $response]);
    }

    public function delete(int $id)
    {
        $menu = Menu::find($id);
        if (!$menu) return response()->json(['status' => false, 'error' => 'Menu not found !'], 404);

        if ($menu->status == "published") {
            $response = $menu->update(['status' => 'trash']);
        } else if ($menu->status == "trash") {
            $response = $menu->update(['status' => 'published']);
        }

        return response()->json(['success' => $response], 200);
    }
}
