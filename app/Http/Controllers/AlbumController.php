<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return view('album.index');
    }

    public function create()
    {
        return view('album.create');
    }

    public function store(Request $request)
    {
        $album = new Album($request->all());

        dd()
    }
}
