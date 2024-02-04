<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.dashboard', compact('vehicles'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'plate_number' => 'required|unique:vehicles',
            'insurance_date' => 'required|date',
        ]);

        $vehicle = Vehicle::create($request->all());

        return response()->json(['vehicle' => $vehicle], 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'plate_number' => 'required|unique:vehicles,plate_number,' . $id,
            'insurance_date' => 'required|date',
        ]);

        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['error' => 'Vehicle not found'], 404);
        }

        $vehicle->update($request->all());

        return response()->json(['vehicle' => $vehicle]);
    }

    public function delete($id)
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['error' => 'Vehicle not found'], 404);
        }

        $vehicle->delete();

        return response()->json(['message' => 'Vehicle deleted']);
    }
}
