<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();

        return view('unit.index',[ 'units' => $units]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'number' => 'required',
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        $unit = new Unit;

        $unit->number = $request->number;
        $unit->title = $request->title;
        $unit->description = $request->description;

        $unit->save();

        return redirect(route('unit.show',['unit' => $unit]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        return view('unit.show',compact('unit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('unit.edit',compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unit $unit)
    {
        $unit->number = $request->number;
        $unit->title = $request->title;
        $unit->description = $request->description;
        $unit->save();

        return view('unit.show',compact('unit'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect(route('unit.index'));
    }
}
