<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class post extends Model
{
    public $directory = "/images/";
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['title','content','path'];


    public function user(){

        return $this->belongsTo('App\Models\User');
    }


    public function photos(){

        return $this->morphMany('App\Models\photo','imageable');
    }

    public function tags(){

        return $this->morphToMany('App\Models\Tag','taggable');
    }

    public function getPathAttribute($value){

        return $this->directory. $value;
    }
}

