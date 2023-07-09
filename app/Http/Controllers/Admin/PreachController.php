<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Preach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PreachController extends Controller
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
    public function create()
    {
        return view('admin.preach.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $preach  = Preach::create($request->all());
        if ($request->file('file')) {
            $url = Storage::put('preachs', $request->file('file'));

            $preach->image()->create([
                'url' => $url
            ]);
        }

        //event(new PostCreated($post));

        return redirect()->route('admin.preachs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preach $preach)
    {
        dd($preach);
        
        return view('admin.preach.edit',[
            'preach' => $preach
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
