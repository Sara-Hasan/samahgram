<?php

namespace App\Models;
use Conner\Likeable\Likeable;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Likeable;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);

    }

    public function  getPostImgAttribute($value) {
        if (strpos($value, 'https://') !== FALSE || strpos($value, 'http://') !== FALSE) {
            return $value;
        }
        return asset('storage/' . $value);
        }

    public function comments(){
    return $this-> hasMany(comment::class);
    }

}
