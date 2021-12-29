<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Comment;
use App\Models\Follow;
use App\Models\Post;
use Conner\Likeable\Like;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AdminController extends Controller
{
//    public function dashboard()
//    {
//        return view('admin.index');
//    }
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */

    public function index()
    {
        $admins  = Admin::all();
        $users   = User::all();
        $posts   = Post::all();
        $follows = Follow::all();
        $comments = Comment::all();

        return view('admin/table-basic', [
            'admins'   => $admins,
            'users'   => $users,
            'posts'   => $posts,
            'follows' => $follows,
            'comments'=> $comments
        ]);
    }
    public function index2()
    {
        $admins   = Admin::all();
        $users    = User::all();
        $posts    = Post::all();
        $follows  = Follow::all();
        $comments = Comment::all();
        return view('admin/index', [
            'admins' => $admins,
            'users' => $users,
            'posts' => $posts,
            'follows' => $follows,
            'comments'=> $comments
        ]);
    }
    public function index3()
    {
        $admins   = Admin::all();
        $users    = User::all();
        $posts    = Post::all();
        $follows  = Follow::all();
        $comments = Comment::all();
        return view('admin/pages-profile', [
            'admins' => $admins,
            'users' => $users,
            'posts' => $posts,
            'follows' => $follows,
            'comments'=> $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin/create-admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();
        return redirect('admoon');
    }
    /**
     *
     * /**
     * Display the specified resource.
     *
     * @param Admin $admin
     * @return Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin/edit-admin', compact('admin'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Admin $id
     * @return RedirectResponse
     */
    public function update(Request $request , $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = $request->password;
        $admin->save();
        return redirect()->route('admoon.index')
            ->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param admin $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect()->route('admoon.index');
    }
}
