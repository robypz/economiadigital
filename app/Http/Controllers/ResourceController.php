<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        if (!empty($request->title)) {
            $resources = Resource::ofTitle($request->title)->paginate(12);
        }
        else{
            $resources = Resource::paginate('12');
        }

        return view('resource.index',compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($content_id)
    {
        return view('resource.create',compact('content_id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'content_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'file' => 'required'
        ]);

        $resource = new Resource;

        $resource->title = $request->title;
        $resource->description = $request->description;
        $resource->user_id = $request->user()->id;
        $resource->content_id = $request->content_id;
        $resource->url = $request->file('file')->store('public');

        $resource->save();

        return redirect(route('content.show',['id' => $request->content_id]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Resource $resource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resource $resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resource $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $resource = Resource::find($request->id);
        Storage::delete($resource->url);
        $resource->delete();
        return redirect(route('resource.index'));
    }

    function download($id) {
        $resource = Resource::find($id);
        return Storage::download($resource->url);
    }
}
