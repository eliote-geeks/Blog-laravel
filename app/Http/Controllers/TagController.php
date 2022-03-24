<?php
namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('tags.index-tags',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create-Tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
     {
        $request->validate([
            'name' =>'required | unique:tags'
        ]);
        $name = $request->name;
        $Tag = new Tag();
        $Tag->name = $name;


        $Tag->save();
        return redirect()->back()->with('message','Tag created successfully');

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tag\tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tag\$Tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('tags.edit-Tag',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $Tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required | unique:tags'
        ]);

        $name = $request->name;
        $tag->name = $name;
        $tag->save();
        return redirect(route('tags.index'))->with('message','Tag Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag\$Tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect(route('tags.index'))->with('message','Tag Deleted Successfully!!');
    }
}

