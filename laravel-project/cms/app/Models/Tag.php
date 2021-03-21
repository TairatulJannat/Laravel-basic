<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public function posts(){

        return $this->morphedByMany('App\Models\post','taggable');
    }

    public function videos(){

        return $this->morphedByMany('App\Models\video','taggable');
    }
}
