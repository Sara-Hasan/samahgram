<?php

namespace App\Http\Controllers;
use App\Models\Post; 
use App\Models\User; 
use App\Models\Follow; 
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $login_user= auth()->user();

    $users=User::whereNotIn('id', $login_user->following->pluck('second_user_id')) // exclude already followed
    ->where('id', '<>', $login_user->id)->get();
  
    $id[] = '';
    foreach ($users as $user) {
        
        $id[] = $user->id;
    }
    $posts = Post::whereIn('user_id', $id)->limit(20)->paginate(9);
    // return $posts ;
    return view ('trending', compact('users','posts'));
    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('trending',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
