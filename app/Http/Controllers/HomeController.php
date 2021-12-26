<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
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

        $posts = Post::whereIn('user_id', $x)->get();


        return  view('home', compact('posts', 'login_user', 'following', 'followers'));
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

        $login_followers = auth()->user()->following()->where('follow_type', 'follower')
            ->where('second_user_id', $login_id)->get('second_user_id');
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
            return view('profile', compact('user', 'login_following', 'login_followers'));
        } else
            return view('users_page', compact('user', 'user_following', 'user_followers', 'login_user', 'results'));
    }

    public function setting($id)
    {
        $user = User::find($id);
        $login_user = auth()->user();

        $user_relationship_status = ['Single', 'In a relationship', 'Married', 'Engaged'];

        if ($login_user->id == $user->id) {
            return view('setting', compact('user', 'user_relationship_status'));
        }
        // $user->posts;
        // return  count($following);
        // return view('profile', compact('user', 'following', 'followers'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request;
        // return $input;
        if ($request->user_img) {
            $data = [
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'user_relationship_status' => $input['user_relationship_status'],
                'user_bio' => $input['user_bio'],
                'user_img' => request('user_img')->store('images')
            ];
        } else {
            $data = [
                'name' => $input['name'],
                'email' => $input['email'],
                'phone' => $input['phone'],
                'user_relationship_status' => $input['user_relationship_status'],
                'user_bio' => $input['user_bio'],
                'user_img' =>  $user->user_img
            ];
        }


        $user->update($data);
        // session()->flash('post_updated_massage','post was updated');

        return  back();
    }


    public function changePasswordPost(Request $request)
    {
        $user = auth()->user();

        if (!(Hash::check($request->get('password'), $user->password))) {
            // The passwords matches
            // return "our current password does not matches with the old password.";
            session()->flash('current_password_error', 'Your current password does not matches with the old password.');
            return back();
        }

        if (strcmp($request->get('password'), $request->get('new_password')) == 0) {
            // Current password and new password same
            session()->flash('same_password_error', 'New Password cannot be same as your current password.');

            // return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }
        if (strcmp($request->get('password_confirmation'), $request->get('new_password'))) {
            // Current password and new password same
            session()->flash('not_mach_password_error', 'New Password dose not mach');

            // return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }


        $user->password = bcrypt($request->new_password);
        $user->save();
        session()->flash('password_updated_massage', 'password was updated');

        return redirect()->back();
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
