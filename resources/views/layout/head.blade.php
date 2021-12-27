<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon -->
      <link href={{asset('assets/images/favicon.png" rel="icon" type="image/png')}}>
         <!-- Basic Page Needs
         ================================================== -->
         <title>Samahgram</title>
         <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Instello - Sharing Photos platform HTML Template">
      <!-- icons
         ================================================== -->
      <link rel="stylesheet" href={{asset('assets/css/icons.css')}}>
      <!-- CSS
         ================================================== -->
      <link rel="stylesheet" href={{asset('assets/css/uikit.css')}}>
      <link rel="stylesheet" href={{asset('assets/css/style.css')}}>
      <link rel="stylesheet" href={{asset('assets/css/tailwind.css')}}>
      <style>
         @media (min-width: 1024px) {
         header .header_inner {
         max-width: 980px;
         }
         .pro-container {
         max-width: 860px;
         }
         }
      </style>
   </head>
   <body>
      <div id="wrapper">
      <header>
        <div class=" container pro-container m-auto">
         <div class="header_inner">

            <div class="Logo">
               <!-- Logo -->
               <a href="trending.html">
                <img src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" alt="">
            </a>
            </div>
            <div class="left-side">

            <div class="header_search">
                <input type="text" placeholder="Search..">
                <div class="icon-search">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                   </svg>
                </div>
             </div>
            </div>

            <div class="right-side">



                <div class="J5g42">

                    <div class="XrOey">
                       <div class="q9xVd">
                          <a href="#" tabindex="0">
                             <svg aria-label="Home" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                <path d="M9.005 16.545a2.997 2.997 0 012.997-2.997h0A2.997 2.997 0 0115 16.545V22h7V11.543L12 2 2 11.543V22h7.005z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                             </svg>
                          </a>
                       </div>
                    </div>

                    <div class="XrOey">
                       <a aria-label="Direct messaging - 0 new notifications link" class="xWeGp" href="#" tabindex="0">
                          <svg aria-label="Direct" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                             <line fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2" x1="22" x2="9.218" y1="3" y2="10.083"></line>
                             <polygon fill="none" points="11.698 20.334 22 3.001 2 3.001 9.218 10.084 11.698 20.334" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></polygon>
                          </svg>
                       </a>
                    </div>

                    <div class="XrOey">
                        <a href="#">
                                <div class="QBdPU " name="add-circle">
                                    <svg aria-label="New Post" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                       <path d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                       <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="6.545" x2="17.455" y1="12.001" y2="12.001"></line>
                                       <line fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12.003" x2="12.003" y1="6.545" y2="17.455"></line>
                                    </svg>
                                 </div>
                         </a>
                    </div>


                    <div uk-dropdown="pos: top-right;mode:click ; animation: uk-animation-slide-bottom-small" class="header_dropdown">
                        <!-- notivication header -->
                        <div class="px-4 py-3 -mx-5 -mt-4 mb-5 border-b">
                           <h4>Upload Video</h4>
                        </div>
                        <!-- notification contents -->
                        <div class="flex justify-center flex-center text-center dark:text-gray-300">
                           <div class="flex flex-col choose-upload text-center">
                              <div class="bg-gray-100 border-2 border-dashed flex flex-col h-24 items-center justify-center relative w-full rounded-lg dark:bg-gray-800 dark:border-gray-600">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                    <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                    <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                 </svg>
                              </div>
                              <p class="my-3 leading-6"> Do you have a video wants to share us <br> please upload her ..
                              </p>
                              <div uk-form-custom>
                                 <input type="file">
                                 <a href="#" class="button soft-warning small"> Choose file</a>
                              </div>
                              <a href="#" class="uk-text-muted mt-3 uk-link"
                                 uk-toggle="target: .choose-upload ;  animation: uk-animation-slide-right-small, uk-animation-slide-left-medium; queued: true">
                              Or Import Video </a>
                           </div>
                           <div class="uk-flex uk-flex-column choose-upload" hidden>
                              <div class="mx-auto flex flex-col h-24 items-center justify-center relative w-full rounded-lg">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-12">
                                    <path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd" />
                                 </svg>
                              </div>
                              <p class="my-3 leading-6"> Import videos from YouTube <br> Copy / Paste your video link here </p>
                              <form class="uk-grid-small" uk-grid>
                                 <div class="uk-width-expand">
                                    <input type="text" class="uk-input uk-form-small  bg-gray-200 dark:bg-gray-700" style="box-shadow:none" placeholder="Paste link">
                                 </div>
                                 <div class="uk-width-auto"> <button type="submit" class="button soft-warning -ml-2">
                                    Import </button>
                                 </div>
                              </form>
                              <a href="#" class="uk-text-muted mt-3 uk-link"
                                 uk-toggle="target: .choose-upload ; animation: uk-animation-slide-left-small, uk-animation-slide-right-medium; queued: true">
                              Or Upload Video </a>
                           </div>
                        </div>
                        <div class="px-4 py-3 -mx-5 -mb-4 mt-5 border-t text-sm dark:border-gray-500 dark:text-gray-500">
                           Your Video size Must be Maxmium 999MB
                        </div>
                     </div>






                    <div class="XrOey">
                       <a href="#" tabindex="0">
                          <svg aria-label="Find People" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                             <polygon fill="none" points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                             <polygon fill-rule="evenodd" points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon>
                             <circle cx="12.001" cy="12.005" fill="none" r="10.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                          </svg>
                       </a>
                    </div>

                    <div class="XrOey">
                       <a class="_0ZPOP kIKUG " href="#">
                          <svg aria-label="Activity Feed" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                             <path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z"></path>
                          </svg>
                       </a>
                       <div class="poA5q" style="margin-left: -423px;"></div>
                    </div>
                    <div uk-drop="mode: click;offset: 4" class="header_dropdown">
                        <h4
                           class="-mt-5 -mx-5 bg-gradient-to-t from-gray-100 to-gray-50 border-b font-bold px-6 py-3">
                           Notification
                        </h4>
                        <ul class="dropdown_scrollbar" data-simplebar>
                           <li>
                              <a href="#">
                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                 </div>
                                 <div class="drop_content">
                                    <p> <strong>Adrian Mohani</strong>  Lorem ipsum dolor cursus
                                       <span class="text-link"> Adipiscing massa convallis  </span>
                                    </p>
                                    <span class="time-ago"> 2 hours ago </span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-2.jpg" alt="">
                                 </div>
                                 <div class="drop_content">
                                    <p>
                                       <strong>Stella Johnson</strong> Nonummy nibh euismod
                                       <span class="text-link"> Imperdiet doming </span>
                                    </p>
                                    <span class="time-ago"> 9 hours ago </span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                 </div>
                                 <div class="drop_content">
                                    <p>
                                       <strong>Alex Dolgove</strong>  Lorem ipsum dolor cursus
                                       <span class="text-link"> Adipiscing massa convallis  </span>
                                    </p>
                                    <span class="time-ago"> 12 hours ago </span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-1.jpg" alt="">
                                 </div>
                                 <div class="drop_content">
                                    <p>
                                       <strong>Stella Johnson</strong> Nonummy nibh euismod
                                       <span class="text-link"> Imperdiet doming </span>
                                    </p>
                                    <span class="time-ago"> Yesterday </span>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="drop_avatar"> <img src="assets/images/avatars/avatar-3.jpg" alt="">
                                 </div>
                                 <div class="drop_content">
                                    <p>
                                       <strong>Alex Dolgove</strong>  Lorem ipsum dolor cursus
                                       <span class="text-link"> Adipiscing massa convallis  </span>
                                    </p>
                                    <span class="time-ago"> 12 hours ago </span>
                                 </div>
                              </a>
                           </li>
                        </ul>
                        <a href="#" class="see-all">See all</a>
                     </div>




                     <div class="XrOey">
                       <div class="wWGrn"></div>
                       <span class="_2dbep qNELH" role="link" tabindex="0" style="width: 24px; height: 24px;">
                        <img alt="" class="_6q-tv" crossorigin="anonymous" data-testid="user-avatar" draggable="false" src="assets/images/avatars/avatar-2.jpg">
                    </span>
                       <div class="poA5q" style="margin-left: -180px;"></div>
                    </div>
                        <div uk-drop="mode: click;offset:9" class="header_dropdown profile_dropdown border-t">
                           <ul>
                              <li><a href="#"> Account setting </a> </li>
                              <li><a href="#"> Payments </a> </li>
                              <li><a href="#"> Help </a> </li>
                              <li><a href="form-login.html"> Log Out</a></li>
                           </ul>
                        </div>

                 </div>



            </div>
         </div>
        </div>

      </header>
      @yield('content')
      <script>
         (function (window, document, undefined) {
             'use strict';
             if (!('localStorage' in window)) return;
             var nightMode = localStorage.getItem('gmtNightMode');
             if (nightMode) {
                 document.documentElement.className += ' dark';
             }
         })(window, document);


         (function (window, document, undefined) {

             'use strict';

             // Feature test
             if (!('localStorage' in window)) return;

             // Get our newly insert toggle
             var nightMode = document.querySelector('#night-mode');
             if (!nightMode) return;

             // When clicked, toggle night mode on or off
             nightMode.addEventListener('click', function (event) {
                 event.preventDefault();
                 document.documentElement.classList.toggle('dark');
                 if (document.documentElement.classList.contains('dark')) {
                     localStorage.setItem('gmtNightMode', true);
                     return;
                 }
                 localStorage.removeItem('gmtNightMode');
             }, false);

         })(window, document);
      </script>
      <!-- Scripts
         ================================================== -->
      <script src={{asset('assets/js/tippy.all.min.js')}}></script>
      <script src={{asset('assets/js/jquery-3.3.1.min.js')}}></script>
      <script src={{asset('assets/js/uikit.js')}}></script>
      <script src={{asset('assets/js/simplebar.js')}}></script>
      <script src={{asset('assets/js/custom.js')}}></script>
      <script src="https://unpkg.com/ionicons@6.0.0/dist/ionicons.js"></script>
   </body>
</html>
