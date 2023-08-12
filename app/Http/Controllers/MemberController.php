<?php

namespace App\Http\Controllers;

use App\Models\Community_Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'department' => 'required',
            'degree' => 'required',
            'country' => 'required',
            'image' => 'image|required'
        ]);
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $photoName = 'image'.time().'.'.$extension;
            $image = '/storage/image/'.$photoName;
            $request->file("image")->move("storage/image",$photoName);

        } else {
            $image = '';
        }
        $member = new Community_Members();
        $member->full_name = $request->full_name;
        $member->department = $request->department;
        $member->degree = $request->degree;
        $member->country = $request->country;
        $member->image = $image;
        $member->save();

        return redirect()->back()->with('success','success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('admin.contents.editorial_member',[
            'members' => Community_Members::all(),
            'member' => Community_Members::find($id)
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
        $request->validate([
            'full_name' => 'required',
            'department' => 'required',
            'degree' => 'required',
            'country' => 'required',
            'image' => 'image|required'
        ]);
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $photoName = 'image'.time().'.'.$extension;
            $image = '/storage/image/'.$photoName;
            $request->file("image")->move("storage/image",$photoName);

        } else {
            $image = '';
        }
        $member =  Community_Members::find($id);
        $member->full_name = $request->full_name;
        $member->department = $request->department;
        $member->degree = $request->degree;
        $member->country = $request->country;
        $member->image = $image;
        $member->save();

        return redirect('/admin/editorial_members')->with('success','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Community_Members::destroy($id);

        return back()->with('success','success');
    }
}
