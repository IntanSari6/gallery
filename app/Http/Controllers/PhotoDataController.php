<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photo;
use App\Models\Album;

class PhotoDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $album = Album::all();
        return view('dashboard.photo-data.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $album = Album::all();
        return view ('dashboard.photo-data.create');
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
            'photo_title' => 'required',
            'photo_description' => 'required',
            'upload_date' => 'required',
            'file_location' => 'required',
            'albumId' => 'required', 
            'userId' => 'required',
        ]);

        if ($request->file('file_location')) {
            $extension = $request->file('file_location')->getClientOriginalExtension();
            $newName = $request->photo_title.'-'.now()->timestamp.'-'.$extension;
            $path = $request->file('file_location')->storeAs('image', $newName, 'public');
        }

        $foto = new Photo([
            'photo_title' => $request->photo_title,
            'photo_description' => $request->photo_description,
            'upload_date' => $request->upload_date,
            'file_location' => $path,
            'albumId' => $request->albumId,
            'userId' => $request->userId,
        ]);
        $foto->save();
        return redirect()->route('photo-data')->with('success', 'tambah data sukses');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $photo = PhotoData::whereId($id)->first();
        return view('show', compact(['photo']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
