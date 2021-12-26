
 <div id="story-modal" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog story-modal">
        <button class="uk-modal-close-default lg:-mt-9 lg:-mr-9 -mt-5 -mr-5 shadow-lg bg-white rounded-full p-4 transition dark:bg-gray-600 dark:text-white" type="button" uk-close></button>
        <div class="story-modal-media">
            <img src={{asset('assets/images/post/img4.jpg')}} alt="" class="inset-0 h-full w-full object-cover">
        </div>
        <div class="flex-1 bg-white dark:bg-gray-900 dark:text-gray-100">
<div class="border-b flex items-center justify-between px-5 py-3 dark:border-gray-600">
    <div class="flex flex-1 items-center space-x-4">
        <a href="#">
            <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                <img src={{asset('assets/images/avatars/avatar-2.jpg')}} class="bg-gray-200 border border-white rounded-full w-8 h-8">
            </div>
        </a>
        <span class="block text-lg font-semibold"> Johnson smith </span>
    </div>
</div>
<div class="story-content p-4" data-simplebar>
    <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
        laoreet dolore magna aliquam erat volutpat. </p>
    <span class="date pr-2"> 15 m</span>

    <div class="py-4 ">
        <div class="flex ">
            <button name="like" class="flex items-center space-x-3 pr-3">
                <div class="flex font-bold items-baseline">
                    <svg aria-label="Like" class="_8-yf5 comment " color="#000" fill="#000" height="24" role="img" viewBox="0 0 24 24" width="24">
                        <path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                        </path>
                    </svg>
                </div>
            </button>
            <label for="comment" class="comment_lable">
                <svg aria-label="Comment" class="_8-yf5 comment" color="#000" fill="#000" height="24" role="img" viewBox="0 0 24 24" width="24">
                    <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </label>
        </div>
        <hr class="-mx-4 my-3">
        <div class="flex items-center space-x-3">
            <button name="others_like">
                <div class="flex items-center">
                    <img src={{asset('assets/images/avatars/avatar-1.jpg')}} alt="" class="w-6 h-6 rounded-full border-2 border-white">
                    <img src={{asset('assets/images/avatars/avatar-4.jpg')}} alt="" class="w-6 h-6 rounded-full border-2 border-white -ml-2">
                    <img src={{asset('assets/images/avatars/avatar-2.jpg')}} alt="" class="w-6 h-6 rounded-full border-2 border-white -ml-2">
                </div>
            </button>
            <div>
                Liked <a href="#"> <strong> Johnson</strong></a> and <button name="others_like"><strong> 209 Others </strong></button>
            </div>
        </div>
    </div>
    <div class="-mt-1 space-y-1">
        <div class="flex flex-1 space-x-2">
            <img src={{asset('assets/images/avatars/avatar-4.jpg')}} class="rounded-full w-8 h-8">
            <div class="flex flex-col w-full">
                <div class="flex flex-1 space-x-2 justify-between items-start ">
                    <span> <strong> Johnson</strong> consectetuer adipiscing elit</span>
                    <button name="comment_like" type="button"> <svg aria-label="Like" class="_8-yf5 like" color="#000" fill="#000" height="12" role="img" viewBox="0 0 24 24" width="12">
                            <path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path>
                        </svg></button>
                </div>
                <div class="comment_component">
                    <span class=" pr-2"> 15 m</span>
                    <button name="comment_like_views" type="button" class="reply pr-2"><span>1 </span> like </button>
                    <button name="reply" type="button" class="reply"> Reply </button>
                </div>
            </div>
        </div>
        <div class="ml-8 mt-2 flex flex-1 space-x-2">
            <img src={{asset('assets/images/avatars/avatar-4.jpg')}} class="rounded-full w-8 h-8">
            <div class="flex flex-col w-full">
                <div class="flex flex-1 mr-3 justify-between items-start">
                    <span> <strong> Johnson</strong> consectetuer adipiscing elit</span>
                    <button name="comment_like" type="button"> <svg aria-label="Like" class="_8-yf5 like" color="#000" fill="#000" height="12" role="img" viewBox="0 0 24 24" width="12">
                            <path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path>
                        </svg></button>
                </div>
                <div class="comment_component ">
                    <span class=" pr-2"> 15 m</span>
                    <button name="comment_like_views" type="button" class="reply pr-2"><span>1 </span> like </button>
                    <button name="reply" type="button" class="reply"> Reply </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border-t dark:border-gray-600">
    <div class="bg-gray-200 dark:bg-gray-700 p-3 relative">
        <input id="comment" type="text" placeholder="Add your Comment.." class="bg-transparent max-h-8 shadow-none">
        <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
            <a href="#"> <i class="uil-image"></i></a>
        </div>
    </div>
</div>
</div>
</div>
</div>
