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
        $following = auth()->user()->following()->where('follow_type', 'following')->get('second_user_id');
        $followers = auth()->user()->following()->where('follow_type', 'followers')->get('second_user_id');

        // return count($user);

        $login_user = auth()->user();
        foreach ($following as $key) {
            $x[] = $key->second_user_id;
        }
        // $x= $user[0]->second_user_id;
        // return $x;
        // return $login_user->posts;
        $posts = Post::whereIn('user_id', $x)->get();
        // return $posts;

        // dd ($posts[0]);

        return  view('home', compact('posts', 'login_user', 'following', 'followers'));
    }
    public function show($id)
    {
        $user = User::find($id);
        $following = auth()->user()->following()->where('follow_type', 'following')->get('second_user_id');
        $followers = auth()->user()->following()->where('follow_type', 'followers')->get('second_user_id');

        // $user->posts;
        // return  count($following);
        return view('profile', compact('user', 'following', 'followers'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $users = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orWhere('phone', 'LIKE', "%{$search}%")
            ->get();
//dd($users);
        // Return the search view with the resluts compacted
        return view('components/layout', compact('users'));
    }

}
