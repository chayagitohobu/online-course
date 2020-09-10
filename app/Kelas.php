<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use Sluggable;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function materi()
    {
        return $this->hasMany('App\Materi');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
