@extends('layout.head')
@section('content')
<div class="main_content">
   <div class="container pro-container m-auto">
      <!-- profile-cover-->
      <div class="flex lg:flex-row flex-col items-center pb-7 pt-4 lg:space-x-8">
         <div class="img_header">
            <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-1 rounded-full m-0.5 mr-2  w-50 h-50 relative overflow-hidden uk-transition-toggle">
               <img src="assets/images/avatars/avatar-7.jpg" class="bg-gray-200 border-4 border-white rounded-full w-full h-full dark:border-gray-900">
               <div class="absolute -bottom-3 custom-overly1 flex justify-center pt-4 pb-7 space-x-3 text-2xl text-white uk-transition-slide-bottom-medium w-full">
                  <a href="#" class="hover:text-white">
                  <i class="uil-camera"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="lg:w/8/12 flex-1 flex flex-col lg:items-start items-center">

            <div class="conteneur_header capitalize flex font-semibold space-x-3 text-center text-sm my-2">
                <h2 class="title_header mb-2"> Stella Jonathan</h2>

               <a href="#" class="bg-blue shadow-sm p-21 px-6 rounded">Follow</a>
               <a href="#" class="bg-transparent shadow-sm p-21 px-6 rounded"> Block</a>
            </div>
            <div class="grid grid-cols-3 lg:text-left lg:text-lg mt-3 text-center w-full dark:text-gray-100">
               <div class="flex lg:flex-row flex-col"> <strong> 120</strong> <div class="lg:pl-2">Posts</div></div>
               <div class="flex lg:flex-row flex-col"><strong> 420 </strong><div class="lg:pl-2">Followers</div></div>
               <div class="flex lg:flex-row flex-col"> <strong>530 </strong><div class="lg:pl-2">Following</div></div>
            </div>
            <p class="des_header"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                doming id quod mazim placerat facer possim assum
             </p>
         </div>
      </div>

      <div class="my-6 grid lg:grid-cols-3 grid-cols-2 gap-6 hover:text-yellow-700 uk-link-reset">
         <div>
            <div class="bg-red-500 max-w-full lg:h-72 h-40 relative overflow-hidden uk-transition-toggle" tabindex="0">
                <a href="#story-modal" uk-toggle class="flex items-center">

               <img src="assets/images/avatars/avatar-lg-1.jpg" class="w-full h-full absolute object-cover inset-0">
               <div class="absolute bg-black bg-opacity-40 bottom-0 flex h-full items-center justify-center space-x-5 text-lg text-white uk-transition-scale-up w-full">
                     <ion-icon name="heart" class="mr-1"></ion-icon>
                     150
                     <ion-icon name="chatbubble-ellipses" class="mr-1"></ion-icon>
                     30
                     <ion-icon name="pricetags" class="mr-1"></ion-icon>
                     12
               </div>
            </a>

            </div>
         </div>
      </div>
      <div class="flex justify-center mt-6">
         <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white"> Load more ..</a>
      </div>
   </div>
</div>
</div>
<!-- Story modal -->
{{-- <x-Story/> --}}

@extends('layout.story')
@endsection
