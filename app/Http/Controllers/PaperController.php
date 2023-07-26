<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paper = Paper::latest()->paginate(5);
        return view('paper.index', compact('paper'))->with('p', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('addpaper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'author' => 'required|string|max:255',
        //     'category' => 'required|string|max:255',
        //     'description' => 'required|string|max:255',
        //     'imageUrl' => 'required|file|image'
        // ]);
        // // if ($request->hasFile('image')) {
        //     $fileNameWithExt = $request->file('image')->getClientOriginalName();
        //     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     $name = time() . '.' . $extension;
        //     $image = $request->file('image')->storeAs('public/Paper', $name);
        //     $imageUrl = '/storage/Paper/' . $name;

        // } else {
        //     $imageUrl = '';
        // }

        $paper = new Paper;
        $paper->title = $request->title;
        $paper->author = $request->author;
        $paper->category = $request->category;
        $paper->description = $request->description;
        // $paper->imageUrl = $imageUrl;

        $paper->save();

        return redirect()->route('blog', $paper->id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paper = Paper::find($id);

        return view('paper.show', [
            'Paper' => $paper,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paper = Paper::find($id);
        $sections = Section::all();
        return view('paper.edit', [
            'Paper' => $paper,
            'sections' => $sections,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'Description' => 'required|string|max:255',
        ]);

        $paper = Paper::find($id);
        $paper->update($validatedData);

        return redirect()->route('Paper.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paper = Paper::find($id);
        $paper->delete();

        return redirect()->route('paper.index');
    }

    public function showPosts()
    {
        $papers = Paper::all();
        return view('blog', [ 'papers' => $papers, ]);
    }
}