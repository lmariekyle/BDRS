<?php

namespace App\Http\Controllers;

use App\Models\UnitType;
use Illuminate\Http\Request;

class UnitTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $unitTypes = UnitType::paginate(10);
        return view('unit-types.index', compact('unitTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('unit-types.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $unittype=UnitType::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success','Project Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $unitType = UnitType::where('id',$id)->first();
        return view('unit-types.show', compact('unitType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $unitType = UnitType::where('id',$id)->first();
        return view('unit-types.edit', compact('unitType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $unitType = UnitType::where('id',$id)->first();

        $unitType->name = $request->name;
        $unitType->status=$request->status;
        $unitType->save();

        return redirect()->back()->with('success','Unit Type has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnitType $unitType)
    {
        //
    }
}
