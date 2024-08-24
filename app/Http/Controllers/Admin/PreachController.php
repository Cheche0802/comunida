<?php

namespace App\Http\Controllers\Admin;

use App\Events\PreachCreated;
use App\Http\Controllers\Controller;
use App\Http\Requests\PreachRequest;
use App\Models\Preach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PreachController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.preachs.index')->only('index');
        $this->middleware('can:admin.preachs.create')->only('create', 'store');
        $this->middleware('can:admin.preachs.edit')->only('edit', 'edit');
        $this->middleware('can:admin.preachs.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preachs = Preach::all();

        return view('admin.preachs.index', compact('preachs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.preachs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$this->authorize('create', new Preach);

        $this->validate($request, ['title' => 'required|min:3']);
        $preach  = Preach::create($request->all());
        
        /* if ($request->file('file')) {
            $url = Storage::put('preachs', $request->file('file'));

            $preach->image()->create([
                'url' => $url
            ]);
        } */

        event(new PreachCreated($preach));

        return redirect()->route('admin.preachs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Preach $preach)
    {
        return view('admin.preachs.show',[
            'preach' => $preach
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Preach $preach)
    {
        //$this->authorize('update', $preach);

        return view('admin.preachs.edit',[
            'preach' => $preach
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Preach $preach, PreachRequest $request)
    {
        //dd($preach, $request->all());
        //$this->authorize('update', $preach);

        $preach->update($request->all());

        return redirect()->route('admin.preachs.index')->with('info', 'Se ha guardado con exito');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Preach $preach)
    {
        //$this->authorize('author', $preach);

        $preach->delete();

        return redirect()->route('admin.preachs.index')->with('info', 'Se ha guardado con exito');
    }
}
