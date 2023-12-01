<?php

namespace App\Http\Controllers;

use App\Models\Key;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keys = Key::all();

        return view('key.index',compact('keys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all()->pluck('name');
        return view('key.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'key' => 'required|unique:keys',
            'role' => 'required|exists:roles,name',
        ]);

        $key = new Key;

        $key->key = $request->key;

        $key->save();

        $key->assignRole($request->role);

        return redirect(route('key.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Key $key)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Key $key)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Key $key)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Key $key)
    {
        //
    }
}
