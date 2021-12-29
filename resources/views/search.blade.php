{{-- @dd($users); --}}

<x-layout>
    <div class="main_content">
        <div class="container m-auto">
            <div class="flex justify-between items-baseline uk-visible@s">
                <h1 class="font-extrabold leading-none mb-6 mt-8 lg:text-2xl text-lg text-gray-900 tracking-tight">
                    Search result
                </h1>
            </div>

            <div class="relative" >

                <div class="pb-3 -ml-3">



                    <ul class="mt-6 grid lg:grid-cols-3 grid-cols-2 gap-3 hover:text-yellow-700 uk-link-reset">
                        @foreach($search as $user)
                            <li>
                                <div class="bg-gray-200 max-w-full lg:h-64 h-52 rounded-lg relative overflow-hidden">
                                    <a href="profile/{{ $user->id }}">

                                        <img src="{{ $user->user_img }}"
                                             class="w-full h-full absolute object-cover inset-0">
                                    </a>
                                    {{-- <a href="profile/{{ $user->id }}" class="absolute right-3 top-3 bg-black bg-opacity-60 rounded-full"
                                        data-tippy-placement="left" title="Hide">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a> --}}

                                    <div class="absolute bottom-0 p-4 w-full custom-overly1">
                                        <div class="flex justify-between align-bottom flex-wrap text-white">
                                            <div class="w-full truncate text-lg"> {{$user->name}} </div>
                                            <div class="leading-5 text-sm">
                                                {{-- <div> 21, Turkey </div> --}}

                                            </div>

                                            <a href="profile/{{ $user->id }} " class="absolute right-3 bottom-3 rounded-full bg-gradient-to-tr from-blue-500 to-purple-700">

                                                <svg xmlns="home" viewBox="0 0 20 20"
                                                     fill="currentColor" class="fill-current h-6 m-1.5 text-white w-6">
                                                    <path
                                                        d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                                </svg>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>





</x-layout>