<?php

namespace App\Http\Controllers;

use App\Models\Preach;
use Illuminate\Http\Request;

class PreachController extends Controller
{
    public function index(){
        
        $preachs = Preach::where('status', '2')
                        ->orderBy('id', 'DESC')
                        ->paginate(8);

        //$preach = Preach::all();

        //dd($preachs);


        return view('preachs.index', compact('preachs'));
    }

    public function show(Preach $preach) {

        // $this->authorize('published', $preach);

        //TODO:para agregarle sugerencias de predicas
        /* 
        $similares = Post::where('category_id', $post->category_id)
                        ->where('status', 2)
                        ->where('id', '!=', $post->id)
                        ->latest('id')
                        ->take(4)
                        ->get(); */

        return view ('preachs.show', compact('preach'));
    }
}
