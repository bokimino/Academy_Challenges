<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
       
       $vehicles = Vehicle::withTrashed()->get();

       
       return response()->json(['vehicles' => $vehicles]);
    }

    public function show($id)
    {
        $vehicle = Vehicle::find($id);

        if (!$vehicle) {
            return response()->json(['error' => 'Vehicle not found'], 404);
        }

        return response()->json(['vehicle' => $vehicle]);
    }

    public function store(Request $request)
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

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
    
        if (!$vehicle) {
            return response()->json(['error' => 'Vehicle not found'], 404);
        }
    
        return response()->json(['vehicle' => $vehicle]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'brand' => 'required',
                'model' => 'required',
                'plate_number' => 'required|unique:vehicles,plate_number,' . $id,
                'insurance_date' => 'required|date',
            ]);

            $vehicle = Vehicle::findOrFail($id);
            $vehicle->update($request->all());

            return response()->json(['vehicle' => $vehicle, 'message' => 'Vehicle updated']);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }

    }

    public function destroy($id)
    {
        $vehicle = Vehicle::find($id);
    
        if (!$vehicle) {
            return response()->json(['error' => 'Vehicle not found'], 404);
        }
    
        $vehicle->delete();
    
        return redirect()->back()->with('message', 'Vehicle deleted');
    }
}
