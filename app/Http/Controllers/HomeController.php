<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $following = auth()->user()->following()->where('follow_type','following')->get('second_user_id');
        $followers = auth()->user()->following()->where('follow_type','followers')->get('second_user_id');

                // return count($user);
                $x[] = '';
        $login_user = auth()->user();
        foreach ($following as $key ) {
           $x[]= $key->second_user_id;
        }
        // $x= $user[0]->second_user_id;
        // return $x;
        // return $login_user->posts;
        if ($x) {
            $posts= Post::whereIn('user_id',$x)->get();
        }
        // return $posts;

        // dd ($posts[0]);

      return  view('home',compact('posts','login_user','following','followers') );
    }
    public function show($id)
    {
        $user = User::find($id);
        $login_user = auth()->user();
        $following = auth()->user()->following()->where('follow_type','following')->get('second_user_id');
        $followers = auth()->user()->following()->where('follow_type','followers')->get('second_user_id');
        // return $user->posts ;
     
        

            if ($login_user == $user) {
                return view('profile',compact('user','following','followers'));
            }else
            return view('users_page',compact('user','following','followers','login_user'));
        // $user->posts;
        // return  count($following);
    }
}
