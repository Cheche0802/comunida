<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;



class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function creating(Post $post)
    {
        if (! \App::runningInConsole())
        $post->user_id = auth()->user()->id;
    }
    /**
     * Handle the Post "deleted" event.
     */
    public function deleting(Post $post)
    {
        if($post->image){
            Storage::delete($post->image->url);
        }
    }


}
