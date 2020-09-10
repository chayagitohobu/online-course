<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use Sluggable;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas');
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
