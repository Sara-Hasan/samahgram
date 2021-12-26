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
        $x[] = '';
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
        $login_user = auth()->user();
        $following = auth()->user()->following()->where('follow_type', 'following')->get('second_user_id');
        $followers = auth()->user()->following()->where('follow_type', 'followers')->get('second_user_id');
        // return $user->posts ;



        if ($login_user == $user) {
            return view('profile', compact('user', 'following', 'followers'));
        } else
            return view('users_page', compact('user', 'following', 'followers', 'login_user'));
        // $user->posts;
        // return  count($following);
        // return view('profile', compact('user', 'following', 'followers'));
    }

    public function setting($id)
    {
        $user = User::find($id);
        $login_user = auth()->user();
        // return $login_user;
        // return $user->posts ;
        $user_relationship_status=['Single','In a relationship','Married','Engaged'];

        if ($login_user->id == $user->id) {
            return view('setting', compact('user','user_relationship_status'));
        }
        // $user->posts;
        // return  count($following);
        // return view('profile', compact('user', 'following', 'followers'));
    }

    public function update(Request $request, $id)
    {
        $user= User::find($id);
        $input= $request;
        // return $input;
        if (request('user_img')) {
            $input['user_img']= request('user_img')->store('images');
            return $input['user_img'];
            // $user->user_img = $input['user_img'];
        }
        // return $request;
        // return $input;
        // return Post::find($post);
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->phone = $input['phone'];
        $user->user_relationship_status = $input['user_relationship_status'];
        $user->user_bio = $input['user_bio'];
        // $user->user_img = $input['user_img'];

        $user->save();
        // $user->update($input);
        // session()->flash('post_updated_massage','post was updated');

        return  back();
    }

    public function search(Request $request)
    {
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
