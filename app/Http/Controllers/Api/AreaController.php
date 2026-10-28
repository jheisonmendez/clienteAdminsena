<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();

        return response()->json([
            'success' => true,
            'data' => $areas
        ]);
    }

    public function show($id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'success' => false,
                'message' => 'Área no encontrada'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $area
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $area = Area::create($request->only(['name', 'description']));

        return response()->json([
            'success' => true,
            'message' => 'Área creada correctamente',
            'data' => $area
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'success' => false,
                'message' => 'Área no encontrada'
            ], 404);
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $area->update($request->only(['name', 'description']));

        return response()->json([
            'success' => true,
            'message' => 'Área actualizada correctamente',
            'data' => $area
        ]);
    }

    public function destroy($id)
    {
        $area = Area::find($id);

        if (!$area) {
            return response()->json([
                'success' => false,
                'message' => 'Área no encontrada'
            ], 404);
        }

        $area->delete();

        return response()->json([
            'success' => true,
            'message' => 'Área eliminada correctamente'
        ]);
    }
}
