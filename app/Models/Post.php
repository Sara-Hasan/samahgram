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

public function likedByUsers()
{
   return  $this->belongsToMany(user::class,'likes');
}
public function like(User $user)
{
return $this -> likedByUsers()->save($user);

}
public function dislike(User $user)
{
return $this -> likedByUsers()->detach($user);
}
public function likedByUser(User $user)
{
    return (bool)DB::table('likes')
    ->where('user_id',$user->id)
    ->where('post_id',$this->id)
    ->count();
}
}
