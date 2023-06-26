<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\PhotoAlbum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoAlbumController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Album $album)
    {
        $this->validate(request(),[
            'photo' => 'require|image|max:2048'
        ]);

        $album->photo_album()->create([
            'url' => request()->file('photo')->store('albums','public')
        ]);

        return Storage::url();
    } 

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhotoAlbum $photoAlbum)
    {
        $photoAlbum->delete();

        return back()->with('flash','Foto eliminada');
    }
}
