<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }
    public function user()
    {
        //un post pertenece a un usuario
        return $this->belongsTo(User::class);
    }
    //la sgt f es para extraer solo 140 caract de la col body
    //para cuando usemos $post->get_excerpt
    public function getGetExcerptAttribute()
    {
        return substr($this->body, 0, 140);
    }
}

