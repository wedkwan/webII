<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect()->route('cars.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)

    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car  $car)
    {
      return view('cars.edit' , compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return redirect()->route('cars.show' , compact('car')) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car  $car)
    {
      $car->delete();
      return redirect()->route('cars.index');
    }
}
