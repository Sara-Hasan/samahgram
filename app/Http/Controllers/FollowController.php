<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $loginUser=  auth()->user()->id;
        $id = $request->user_id;
        // return $id;
        $following = new Follow;
        $following -> user_id  = $loginUser;
        $following -> second_user_id = $id;
        $following -> follow_type = 'following';
        $following -> follow_status = '1';
        $following ->save();

        $follower = new Follow;
        $follower -> user_id  = $loginUser;
        $follower -> second_user_id = $id;
        $follower -> follow_type = 'follower';
        $follower -> follow_status = '1';
        $follower ->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function show(Follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(Follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
       Follow::find($id)-> delete();
       Follow::find($id+1)-> delete();
    //    Session::flash('massage','post was deleted');
        return back();
    }
}
