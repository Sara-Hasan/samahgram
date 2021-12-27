<?php

namespace App\Http\Controllers;

use App\Models\Follow;
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
        $users=User::whereNotIn('id', $login_user->following->pluck('second_user_id')) // exclude already followed
        ->where('id', '<>', $login_user->id)->limit(5)->inRandomOrder()->get();
        $id[] = '';
        foreach ($users as $user) {

            $id[] = $user->id;
        }

        return  view('home', compact('posts', 'login_user', 'following', 'followers','users'));
    }
    public function show($id)
    {
        $results[] = '';
        $user = User::find($id);
        $user_id = $user->id;
        $login_user = auth()->user();
        $login_id = $login_user->id;
        // login user page
        $login_following = auth()->user()->following()->where('follow_type', 'following')
            ->where('user_id', $login_id)->get('second_user_id');

        $ing_id = auth()->user()->following()->where('follow_type', 'following')
            ->where('user_id', $login_id)->get('id');
            // return $login_following;
            $login_following_id = [];
            foreach ($login_following as $user_follow) {
                // return $user->second_user_id;
                $login_following_id[] = $user_follow->second_user_id;
            }
            // return $ing_id;
            $array_id=[];
            foreach ($ing_id as $id) {
                // return $user->second_user_id;
                $array_id[] = $id->id;
            }
            // return $array_id;
            $following_id =User::whereIn('id', $login_following_id)->get();


        $login_followers = Follow::where('follow_type', 'follower')
            ->where('second_user_id', $login_id)->get('user_id');

            $login_follower_id = [];
            foreach ($login_followers as $user_follower) {
                // return $user->second_user_id;
                $login_follower_id[] = $user_follower->user_id;
            }
            // return $login_followers;
         $login_follower_id =User::whereIn('id', $login_follower_id)->get();
            // return $login_follower_id;

        // user page
        $user_following = Follow::where('follow_type', 'following')
            ->where('user_id', $user_id)->get('second_user_id');
        $user_followers = Follow::where('follow_type', 'follower')
            ->where('second_user_id', $user_id)->get('second_user_id');

        $results = Follow::where('user_id', '=', $login_id)
            ->where('second_user_id', '=', $user_id)
            ->get();
        // return $user_followers ;

        if ($login_user == $user) {
            return view('profile', compact('user', 'login_following', 'login_followers','following_id','login_follower_id','array_id'));
        } else
            return view('users_page', compact('user', 'user_following', 'user_followers', 'login_user', 'results'));
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
        if ($request->user_img) {
            $data=[
                'name'=>$input['name'],
                'email'=> $input['email'],
                'phone'=>$input['phone'],
                'user_relationship_status'=> $input['user_relationship_status'],
                'user_bio'=>$input['user_bio'],
                'user_img'=> request('user_img')->store('images')
            ];
        }else{
            $data=[
                'name'=>$input['name'],
                'email'=> $input['email'],
                'phone'=>$input['phone'],
                'user_relationship_status'=> $input['user_relationship_status'],
                'user_bio'=>$input['user_bio'],
                'user_img'=>  $user->user_img
            ];
            // $input['user_img'] = $user->user_img;
        }


        $user->update($data);
        // session()->flash('post_updated_massage','post was updated');

        return  back();
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $search = User::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->orWhere('phone', 'LIKE', "%{$search}%")
            ->get();
        //dd($users);
        // Return the search view with the resluts compacted
        return view('search', compact('search'));
    }


}
