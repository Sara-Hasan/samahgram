<x-layout>
        <div class="main_content">
            <div class="container m-auto">

                <h1 class="text-2xl leading-none text-gray-900 tracking-tight mt-3"> Account Setting </h1>

                <div class="grid lg:grid-cols-3 mt-12 gap-8">
                    <div>
                        <h3 class="text-xl mb-2"> Basic</h3>
                        <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-lg shadow col-span-2">

                        <form action="{{route('profile',$user->id)}}" method="post" enctype="multipart/form-data">
                           <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                           <div class="form-group">
                               <label for="pwd">User Image:</label>
                               <img width="100" height="100" src="{{$user->user_img}}" alt="" style="margin-bottom: 20px;">
                               <label for="pwd">Change user Image</label>

                            <input type="file" class="form-control-file" id="pwd" placeholder="Enter password" name="user_img">
                            </div>
                                     <div class="col-span-2">
                                        <label for=""> User name</label>
                                        <input type="text" name="name" placeholder="Your name.." class="shadow-none bg-gray-100" value="{{$user->name}}">
                                    </div>
                                    
                                        <div class="col-span-2">
                                            <label for=""> Email</label>
                                            <input type="text" name="email" placeholder="Your name.." class="shadow-none bg-gray-100" value="{{$user->email}}">
                                        </div>
                                        <div class="col-span-2">
                                            <label for=""> Phone Number</label>
                                            <input type="text" name="phone" placeholder="Your name.." class="shadow-none bg-gray-100" value="{{$user->phone}}">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="">Bio</label>
                                            <textarea id="" name="user_bio" rows="3"  class="shadow-none bg-gray-100">{{$user->user_bio}}</textarea>
                                        </div>
                                        <div>
                                        <label for=""> Relationship </label>
                                        <select id="relationship" name="user_relationship_status"  class="shadow-none bg-gray-100">
                                            
                                            <option value="{{$user->user_relationship_status}}">{{$user->user_relationship_status}}</option>
                                            <option value="0">None</option>
                                            @foreach ($user_relationship_status as $status)
                                                @if ($status == $user->user_relationship_status)
                                                    @continue
                                                    @endif 
                                            <option value="{{$status}}">{{$status}}</option>
                                           
                                            @endforeach 
                                        </select>
                                        </div>
                        @csrf
                            @method('PUT')      
                         
                    </div>
                    <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                        <a href=""><button class="p-2 px-4 rounded bg-gray-50 text-red-500"> Cancel </button></a>
                        <input type="submit" class="button bg-blue-700" value="Save" > 
                    </div>
                            </form>
                          


                    </div>

                    <div>
                        <h3 class="text-xl mb-2"> Privacy</h3>
                        <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-lg shadow lg:p-6 p-4 col-span-2">

                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4> Who can follow me ?</h4>
                                <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                            </div>
                            <div class="switches-list -mt-8 is-large">
                                <div class="switch-container">
                                    <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-between items-center">
                            <div>
                                <h4> Show my activities ?</h4>
                                <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                            </div>
                            <div class="switches-list -mt-8 is-large">
                                <div class="switch-container">
                                    <label class="switch"><input type="checkbox" checked><span class="switch-button"></span> </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-between items-center">
                            <div>
                                <h4> Search engines?</h4>
                                <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                            </div>
                            <div class="switches-list -mt-8 is-large">
                                <div class="switch-container">
                                    <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="flex justify-between items-center">
                            <div>
                                <h4> Allow Commenting?</h4>
                                <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, </div>
                            </div>
                            <div class="switches-list -mt-8 is-large">
                                <div class="switch-container">
                                    <label class="switch"><input type="checkbox"><span class="switch-button"></span> </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>

                </div>

            </div>

        </div>

    </x-layout>

