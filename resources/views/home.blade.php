<x-layout>

            {{-- <div class="sidebar_inner" data-simplebar>
                <div class="flex flex-col items-center my-6 uk-visible@s">
                    <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full transition m-0.5 mr-2  w-24 h-24">
                        <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border-4 border-white rounded-full w-full h-full">
                    </div>
                    <a href="profile/{{$login_user->id}}" class="text-xl font-medium capitalize mt-4 uk-link-reset">  {{$login_user->name}}
                    </a>
                    <div class="flex justify-around w-full items-center text-center uk-link-reset text-gray-800 mt-6">
                        <div>
                            <a href="#">
                                <strong>Post</strong>
                                <div> {{count($login_user->posts)}} </div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <strong>Following</strong>
                                <div> {{count($followers)}}</div>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <strong>Followers</strong>
                                <div> {{count($following)}}</div>
                            </a>
                        </div>
                    </div>
                </div>
                <hr class="-mx-4 -mt-1 uk-visible@s">
                <ul>
                    <li class="active">
                        <a href="feed.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                            </svg>
                            <span> Feed </span> </a>
                    </li>
                    <li>
                        <a href="explore.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            <span> Explore </span> </a>
                    </li>
                    <li>
                        <a href="chat.html">
                            <i class="uil-location-arrow"></i>
                            <span> Messages </span> <span class="nav-tag"> 3</span> </a>
                    </li>
                    <li>
                        <a href="trending.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                            <span> Trending </span> </a>
                    </li>
                    <li>
                        <a href="market.html">
                            <i class="uil-store"></i>
                            <span> Marketplace </span> </a>
                    </li>
                    <li>
                        <a href="setting.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span> Settings </span>
                        </a>
                        <ul>
                            <li><a href="setting.html">General </a></li>
                            <li><a href="setting.html"> Account setting </a></li>
                            <li><a href="setting.html">Billing <span class="nav-tag">3</span> </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="profile.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            <span> My Profile </span> </a>
                    </li>
                    <li>
                        <hr class="my-2">
                    </li>
                    <li>
                        <a href="form-login.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span> Logout </span> </a>
                    </li>
                </ul>
            </div> --}}

        <div class="main_content">

            <div class="container m-auto">

                <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-5"> Feed </h1>

                <div class="lg:flex justify-center lg:space-x-10 lg:space-y-0 space-y-5">

                    <!-- left sidebar-->
                    <div class="space-y-5 flex-shrink-0 lg:w-7/12">
                            @foreach ($posts as $post )
                        <!-- post 1-->
                        <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                            <!-- post header-->
                            <div class="flex justify-between items-center px-4 py-3">
                                <div class="flex flex-1 items-center space-x-4">
                                    <a href="profile/{{$post->User->id}}">
                                        <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                                            <img src="{{$post->User->user_img }}" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                                        </div>
                                    </a>
                                   <a href="profile/{{$post->User->id}}"><span class="block capitalize font-semibold dark:text-gray-100"> {{$post->user->name}} </span></a>
                                </div>
                                <div>
                                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-share-alt mr-1"></i> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-edit-alt mr-1"></i> Edit Post
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-comment-slash mr-1"></i> Disable comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-favorite mr-1"></i> Add favorites
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                    <i class="uil-trash-alt mr-1"></i> Delete
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div uk-lightbox>
                                <a href="assets/images/post/img4.jpg">
                                    <img src="{{$post->post_img }}" alt="">
                                </a>
                            </div>


                            <div class="py-3 px-4 space-y-3">

                                <div class="flex space-x-4 lg:font-bold">
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                            </svg>
                                        </div>
                                        <div> Like</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div> Comment</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <div> Share</div>
                                    </a>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="flex items-center">
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                    </div>
                                    <div class="dark:text-gray-100">
                                         {{$post->post_likes_number}} Like </strong>
                                    </div>
                                </div>

                                <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                                    @foreach ($post->comments as $comment)
                                    <div class="-mt-1 space-y-1">
                                        <div class="flex flex-1 space-x-2">
                                            <img src={{asset('assets/images/avatars/avatar-4.jpg')}} class="rounded-full w-8 h-8">
                                            <div class="flex flex-col w-full">
                                            <div class="flex flex-1 space-x-2 justify-between items-start ">
                                               <span> <strong> {{ $comment->user->name }}</strong> {{ $comment->comment_text }}</span>
                                               <button name="comment_like" type="button"> <svg aria-label="Like" class="_8-yf5 like" color="#000" fill="#000" height="12" role="img" viewBox="0 0 24 24" width="12"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg></button>
                                            </div>
                                            <div class="comment_component">
                                                    <span class=" pr-2"> {{$comment->created_at->diffForHumans()}}</span>
                                                    <button name="comment_like_views" type="button" class="reply pr-2"><span>1 </span> like </button>
                                                    <button name="reply" type="button" class="reply pr-2"> Reply </button>
                                                    <form class="inline-block" action="{{ route('comments.destroy',$comment->id) }}" method="POST" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="reply"> delete </button>

                                                    </form>

                                            </div>
                                            </div>
                                        </div>
                                        <div class="ml-8 mt-2 flex flex-1 space-x-2">
                                            <img src={{asset('assets/images/avatars/avatar-4.jpg')}} class="rounded-full w-8 h-8">
                                            <div class="flex flex-col w-full">
                                            <div class="flex flex-1 mr-3 justify-between items-start">
                                               <span> <strong> Johnson</strong> consectetuer adipiscing elit</span>
                                               <button name="comment_like" type="button"> <svg aria-label="Like" class="_8-yf5 like" color="#000" fill="#000" height="12" role="img" viewBox="0 0 24 24" width="12"><path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path></svg></button>
                                            </div>
                                            <div class="comment_component ">
                                                    <span class=" pr-2"> 15 m</span>
                                                    <button name="comment_like_views" type="button" class="reply pr-2"><span>1 </span> like </button>
                                                    <button name="reply" type="button" class="reply"> Reply </button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                                <form action="/comments" method="post" autocomplete="off">
                                    @csrf
                                    <div class="flex flex-row items-center justify-between">
                                        <input class="w-full outline-none border-none p-1" type="text"
                                        id="comment{{$post->id}}" placeholder="{{__('Add Comment')}}" name="comment_text"  autofocus />
                                        <input type="hidden" name="post_id" value="{{$post->id}}">
                                        <button class="text-blue-500 font-semibold hover:text-blue-700" type="submit">{{__('Post')}}</button>
                                    </div>
                                </form>


                            </div>

                        </div>
                        @endforeach
                        <!-- post 2-->
{{--
                        <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0">

                            <!-- post header-->
                            <div class="flex justify-between items-center px-4 py-3">
                                <div class="flex flex-1 items-center space-x-4">
                                    <a href="#">
                                        <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                                        </div>
                                    </a>
                                    <span class="block capitalize font-semibold dark:text-gray-100"> Johnson smith </span>
                                </div>
                                <div>
                                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-share-alt mr-1"></i> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-edit-alt mr-1"></i> Edit Post
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-comment-slash mr-1"></i> Disable comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-favorite mr-1"></i> Add favorites
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                    <i class="uil-trash-alt mr-1"></i> Delete
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div uk-lightbox>
                                <div class="grid grid-cols-2 gap-2 p-2">

                                    <a href="assets/images/post/img9.jpg" class="col-span-2">
                                        <img src="assets/images/post/img9.jpg" alt="" class="rounded-md w-full lg:h-76 object-cover">
                                    </a>
                                    <a href="assets/images/post/img10.jpg">
                                        <img src="assets/images/post/img10.jpg" alt="" class="rounded-md w-full h-full">
                                    </a>
                                    <a href="assets/images/post/img11.jpg" class="relative">
                                        <img src="assets/images/post/img11.jpg" alt="" class="rounded-md w-full h-full">
                                        <div class="absolute bg-gray-900 bg-opacity-30 flex justify-center items-center text-white rounded-md inset-0 text-2xl"> + 15 more </div>
                                    </a>

                                </div>
                            </div>

                            <div class="py-3 px-4 space-y-3">

                                <div class="flex space-x-4 lg:font-bold">
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                            </svg>
                                        </div>
                                        <div> Like</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div> Comment</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <div> Share</div>
                                    </a>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="flex items-center">
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                    </div>
                                    <div class="dark:text-gray-100">
                                        Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                    </div>
                                </div>

                                <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                                    <div class="flex">
                                        <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                        </div>
                                        <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                            <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i class="uil-grin-tongue-wink"> </i> </p>
                                            <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                                    <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none">
                                    <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                                        <a href="#"> <i class="uil-image"></i></a>
                                        <a href="#"> <i class="uil-video"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div> --}}

                        <!-- Load more-->
                        <div class="flex justify-center mt-6" id="toggle" uk-toggle="target: #toggle ;animation: uk-animation-fade">
                            <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>

                        <!-- post 3-->
                        <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0" id="toggle" hidden>

                            <!-- post header-->
                            <div class="flex justify-between items-center px-4 py-3">
                                <div class="flex flex-1 items-center space-x-4">
                                    <a href="#">
                                        <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                                        </div>
                                    </a>
                                    <span class="block capitalize font-semibold dark:text-gray-100"> Johnson smith </span>
                                </div>
                                <div>
                                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-share-alt mr-1"></i> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-edit-alt mr-1"></i> Edit Post
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-comment-slash mr-1"></i> Disable comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-favorite mr-1"></i> Add favorites
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                    <i class="uil-trash-alt mr-1"></i> Delete
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <div class="p-3 border-b dark:border-gray-700">

                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim laoreet dolore magna aliquam erat volutpat

                            </div>


                            <div class="py-3 px-4 space-y-3">

                                <div class="flex space-x-4 lg:font-bold">
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                            </svg>
                                        </div>
                                        <div> Like</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div> Comment</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <div> Share</div>
                                    </a>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="flex items-center">
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                    </div>
                                    <div class="dark:text-gray-100">
                                        Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                    </div>
                                </div>

                                <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                                    <div class="flex">
                                        <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                        </div>
                                        <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                            <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i class="uil-grin-tongue-wink"> </i> </p>
                                            <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                        </div>
                                        <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                            <p class="leading-6">Nam liber tempor cum soluta nobis eleifend option <i class="uil-grin-tongue-wink-alt"></i>
                                            </p>
                                            <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                                    <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none">
                                    <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                                        <a href="#"> <i class="uil-image"></i></a>
                                        <a href="#"> <i class="uil-video"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- post 4-->
                        <div class="bg-white shadow rounded-md dark:bg-gray-900 -mx-2 lg:mx-0" id="toggle" hidden>

                            <!-- post header-->
                            <div class="flex justify-between items-center px-4 py-3">
                                <div class="flex flex-1 items-center space-x-4">
                                    <a href="#">
                                        <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 border border-white rounded-full w-8 h-8">
                                        </div>
                                    </a>
                                    <span class="block capitalize font-semibold dark:text-gray-100"> Johnson smith </span>
                                </div>
                                <div>
                                    <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i> </a>
                                    <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700" uk-drop="mode: hover;pos: top-right">

                                        <ul class="space-y-1">
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-share-alt mr-1"></i> Share
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-edit-alt mr-1"></i> Edit Post
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-comment-slash mr-1"></i> Disable comments
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                    <i class="uil-favorite mr-1"></i> Add favorites
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="-mx-2 my-2 dark:border-gray-800">
                                            </li>
                                            <li>
                                                <a href="#" class="flex items-center px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                    <i class="uil-trash-alt mr-1"></i> Delete
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <div class="w-full h-full">
                                <iframe src="https://www.youtube.com/embed/pQN-pnXPaVg" frameborder="0" uk-video="automute: true" allowfullscreen uk-responsive class="w-full lg:h-64 h-40"></iframe>
                            </div>


                            <div class="py-3 px-4 space-y-3">

                                <div class="flex space-x-4 lg:font-bold">
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                            </svg>
                                        </div>
                                        <div> Like</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2">
                                        <div class="p-2 rounded-full text-black">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                                <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div> Comment</div>
                                    </a>
                                    <a href="#" class="flex items-center space-x-2 flex-1 justify-end">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="22" height="22" class="dark:text-gray-100">
                                            <path d="M15 8a3 3 0 10-2.977-2.63l-4.94 2.47a3 3 0 100 4.319l4.94 2.47a3 3 0 10.895-1.789l-4.94-2.47a3.027 3.027 0 000-.74l4.94-2.47C13.456 7.68 14.19 8 15 8z" />
                                        </svg>
                                        <div> Share</div>
                                    </a>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <div class="flex items-center">
                                        <img src="assets/images/avatars/avatar-1.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900">
                                        <img src="assets/images/avatars/avatar-4.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                        <img src="assets/images/avatars/avatar-2.jpg" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                                    </div>
                                    <div class="dark:text-gray-100">
                                        Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                                    </div>
                                </div>

                                <div class="border-t pt-4 space-y-4 dark:border-gray-600">
                                    <div class="flex">
                                        <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                        </div>
                                        <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                            <p class="leading-6">In ut odio libero vulputate <urna class="i uil-heart"></urna> <i class="uil-grin-tongue-wink"> </i> </p>
                                            <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                        </div>
                                    </div>
                                    <div class="flex">
                                        <div class="w-10 h-10 rounded-full relative flex-shrink-0">
                                            <img src="assets/images/avatars/avatar-1.jpg" alt="" class="absolute h-full rounded-full w-full">
                                        </div>
                                        <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 h-full relative lg:ml-5 ml-2 lg:mr-20  dark:bg-gray-800 dark:text-gray-100">
                                            <p class="leading-6">Nam liber tempor cum soluta nobis eleifend option <i class="uil-grin-tongue-wink-alt"></i>
                                            </p>
                                            <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-gray-100 bg-gray-100 rounded-full rounded-md relative dark:bg-gray-800">
                                    <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none">
                                    <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                                        <a href="#"> <i class="uil-image"></i></a>
                                        <a href="#"> <i class="uil-video"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Load more-->
                        <div class="flex justify-center mt-6" id="toggle" hidden>
                            <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>


                    </div>

                    <!-- right sidebar-->
                    <div class="lg:w-5/12">

                        <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">

                            <div class="bg-gray-50 dark:bg-gray-800 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:border-gray-800">
                                <h2 class="font-semibold text-lg">Who to follow</h2>
                                <a href="#"> Refresh</a>
                            </div>

                            <div class="divide-gray-300 divide-gray-50 divide-opacity-50 divide-y px-4 dark:divide-gray-800 dark:text-gray-100">
                                <div class="flex items-center justify-between py-3">
                                    <div class="flex flex-1 items-center space-x-4">
                                        <a href="profile.html">
                                            <img src="assets/images/avatars/avatar-2.jpg" class="bg-gray-200 rounded-full w-10 h-10">
                                        </a>
                                        <div class="flex flex-col">
                                            <span class="block capitalize font-semibold"> Johnson smith </span>
                                            <span class="block capitalize text-sm"> Australia </span>
                                        </div>
                                    </div>

                                    <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800"> Follow </a>
                                </div>
                                <div class="flex items-center justify-between py-3">
                                    <div class="flex flex-1 items-center space-x-4">
                                        <a href="profile.html">
                                            <img src="assets/images/avatars/avatar-1.jpg" class="bg-gray-200 rounded-full w-10 h-10">
                                        </a>
                                        <div class="flex flex-col">
                                            <span class="block capitalize font-semibold"> James Lewis </span>
                                            <span class="block capitalize text-sm"> Istanbul </span>
                                        </div>
                                    </div>
                                    <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800"> Follow </a>
                                </div>
                                <div class="flex items-center justify-between py-3">
                                    <div class="flex flex-1 items-center space-x-4">
                                        <a href="profile.html">
                                            <img src="assets/images/avatars/avatar-5.jpg" class="bg-gray-200 rounded-full w-10 h-10">
                                        </a>
                                        <div class="flex flex-col">
                                            <span class="block capitalize font-semibold"> John Michael </span>
                                            <span class="block capitalize text-sm"> New York </span>
                                        </div>
                                    </div>
                                    <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800"> Follow </a>
                                </div>
                                <div class="flex items-center justify-between py-3">
                                    <div class="flex flex-1 items-center space-x-4">
                                        <a href="profile.html">
                                            <img src="assets/images/avatars/avatar-7.jpg" class="bg-gray-200 rounded-full w-10 h-10">
                                        </a>
                                        <div class="flex flex-col">
                                            <span class="block capitalize font-semibold"> Monroe Parker </span>
                                            <span class="block capitalize text-sm"> Yeman </span>
                                        </div>
                                    </div>

                                    <a href="#" class="border border-gray-200 font-semibold px-4 py-1 rounded-full hover:bg-pink-600 hover:text-white hover:border-pink-600 dark:border-gray-800"> Follow </a>
                                </div>

                            </div>

                        </div>

                        <div class="mt-5" uk-sticky="offset:28; bottom:true ; media @m">
                            <div class="bg-white dark:bg-gray-900 shadow-md rounded-md overflow-hidden">

                                <div class="bg-gray-50 border-b border-gray-100 flex items-baseline justify-between py-4 px-6 dark:bg-gray-800 dark:border-gray-700">
                                    <h2 class="font-semibold text-lg">Latest</h2>
                                    <a href="explore.html"> See all</a>
                                </div>

                                <div class="grid grid-cols-2 gap-2 p-3 uk-link-reset">

                                    <div class="bg-red-500 max-w-full h-32 rounded-lg relative overflow-hidden uk-transition-toggle">
                                        <a href="#story-modal" uk-toggle>
                                            <img src="assets/images/post/img2.jpg" class="w-full h-full absolute object-cover inset-0">
                                        </a>
                                        <div class="flex flex-1 justify-around items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                            <a href="#"> <i class="uil-heart"></i> 150 </a>
                                            <a href="#"> <i class="uil-heart"></i> 30 </a>
                                        </div>
                                    </div>

                                    <div class="bg-red-500 max-w-full h-40 rounded-lg relative overflow-hidden uk-transition-toggle">
                                        <a href="#story-modal" uk-toggle>
                                            <img src="assets/images/post/img7.jpg" class="w-full h-full absolute object-cover inset-0">
                                        </a>
                                        <div class="flex flex-1 justify-around items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                            <a href="#"> <i class="uil-heart"></i> 150 </a>
                                            <a href="#"> <i class="uil-heart"></i> 30 </a>
                                        </div>
                                    </div>

                                    <div class="bg-red-500 max-w-full h-40 -mt-8 rounded-lg relative overflow-hidden uk-transition-toggle">
                                        <a href="#story-modal" uk-toggle>
                                            <img src="assets/images/post/img5.jpg" class="w-full h-full absolute object-cover inset-0">
                                        </a>
                                        <div class="flex flex-1 justify-around  items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                            <a href="#"> <i class="uil-heart"></i> 150 </a>
                                            <a href="#"> <i class="uil-heart"></i> 30 </a>
                                        </div>
                                    </div>

                                    <div class="bg-red-500 max-w-full h-32 rounded-lg relative overflow-hidden uk-transition-toggle">
                                        <a href="#story-modal" uk-toggle>
                                            <img src="assets/images/post/img3.jpg" class="w-full h-full absolute object-cover inset-0">
                                        </a>
                                        <div class="flex flex-1 justify-around  items-center absolute bottom-0 w-full p-2 text-white custom-overly1 uk-transition-slide-bottom-medium">
                                            <a href="#"> <i class="uil-heart"></i> 150 </a>
                                            <a href="#"> <i class="uil-heart"></i> 30 </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>


            </div>

        </div>
        <x-story/>
    </x-layout>
