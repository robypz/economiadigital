<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Unit;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Unit $unit)
    {
        return view('content.create',['unit' => $unit]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_id' => 'required',
            'title' => 'required',
            'itemization' => 'required'
        ]);

        $content = new Content;

        $content->unit_id = $request->unit_id;
        $content->title = $request->title;
        $content->itemization =$request->itemization;
        $content->save();

        return response($content);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $content = Content::find($id);
        return view('content.show',compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $content)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $content)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Content $content)
    {
        $unit=$content->unit_id;
        $content->delete();

        return redirect(route('unit.show',$unit));
    }
}
