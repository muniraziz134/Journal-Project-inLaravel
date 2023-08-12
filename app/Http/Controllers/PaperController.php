<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function ToggleJournalToView(Request $request)
    {
        $paper = Paper::find($request->id);
        $paper->is_selected = !$paper->is_selected;
        $paper->save();

        return response()->json('success',200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->check())
        {
            return view('addpaper');
        }
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'authorId' => 'required|numeric|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'coverPhoto' => 'required|file|image',
            'article' => 'required|file',
        ]);
        if ($request->hasFile('coverPhoto')) {
            $filenameWithExt = $request->file('coverPhoto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('coverPhoto')->getClientOriginalExtension();
            $photoName = 'coverPhoto'.time().'.'.$extension;
            $coverPhoto = '/storage/coverPhoto/'.$photoName;
            $request->file("coverPhoto")->move("storage/coverPhoto",$photoName);

        } else {
            $coverPhoto = '';
        }

        if ($request->hasFile('article')) {
            $filenameWithExt = $request->file('article')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('article')->getClientOriginalExtension();
            $photoName = 'article'.time().'.'.$extension;
            $article = '/storage/article/'.$photoName;
            $request->file("article")->move("storage/article",$photoName);

        } else {
            $article = '';
        }

        $paper = new Paper;
        $paper->title = $request->title;
        $paper->author_id = $request->authorId;
        $paper->category = $request->category;
        $paper->description = $request->description;
        $paper->coverPhoto = $coverPhoto;
        $paper->article = $article;
        $paper->save();
        return redirect()->route('home');
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

        return view('paper-show', [
            'paper' => $paper,
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
        Paper::destroy($id);


        return request()->wantsJson()
        ? response()->json('success',200)
        :redirect()->route('paper.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request)
    {
        $id = $request->id;
        $paper = Paper::find($id);
        $paper->status = 'published';
        $paper->save();
        return request()->wantsJson()
        ? response()->json('success',200)
        : redirect()->route('blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download(Request $request)
    {
        $file = '1690368758.pdf';
        $path = storage_path('storage/app/public/Paper/1690368758.pdf');

        if (file_exists($path)) {
            return response()->download($path, $file, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="' . $file . '"',
            ]);
        } else {
            abort(404, 'File not found.');
        }

    }
}
