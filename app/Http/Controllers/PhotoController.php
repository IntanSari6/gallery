<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Photo;
use App\Models\Album;

class PhotoController extends Controller
{
    public function index(){
        $user = User::all();
        $album = Album::all();
        return view('dashboard.photo-data.index', compact('user', 'album'));
    }

    public function photo_action(Request $request){
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
}
