<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    public static function boot()
    {
        parent::boot();

        static::deleting(function($photo){
            $photo->photoAlbums->each->delete();
        });
    }

    public function getRouteKeyName()
    {
        return 'url';
    }

    public function photoAlbums()
    {
        return $this->hasMany(PhotoAlbum::class);
    }

    public function generateUrl()
    {
        $url = Str::slug($this->title);

        if ($this->whereUrl($url)->exists())
        {
            $url = "{$url}-{$this->id}";
        }

        $this->url = $url;

        $this->save();

    }
}
