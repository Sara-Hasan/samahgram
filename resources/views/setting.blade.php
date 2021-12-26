<x-layout>
    <div class="main_content">
        <div class="container m-auto">
            
            <h1 class="text-2xl leading-none text-gray-900 tracking-tight mt-3"> Account Setting </h1>
            <ul id="tabs" class="mt-5 -mr-3 flex-nowrap lg:overflow-hidden overflow-x-scroll uk-tab">
                <li class="uk-active"><a id="default-tab" href="#Basic">General</a></li>
                <li class=""><a href="#Password">Password</a></li>

            </ul>
            <div id="tab-contents">
                <div id="Basic" class="p-4">

                    <div class="grid lg:grid-cols-3 mt-12 gap-8">
                        <div>
                            <h3 class="text-xl mb-2"> Basic</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                        @if(Session('password_updated_massage'))
                        
                <div class="alert alert-success"> 
                    {{Session('password_updated_massage')}}
                </div>
                @endif
                        <div class="bg-white rounded-md lg:shadow-lg shadow col-span-2">

                            <form action="{{ route('profile', $user->id) }}" method="post"
                                enctype="multipart/form-data">
                                <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                                    <div class="form-group">
                                        <label for="pwd">User Image:</label>
                                        <img width="100" height="100" src="{{ $user->user_img }}"
                                            alt="{{ $user->name }}" style=" margin-bottom:20px;">
                                        <label for="pwd">Change user Image</label>

                                        <input type="file" class="form-control-file" id="pwd"
                                            placeholder="Enter password" name="user_img">
                                    </div>
                                    <div class="col-span-2">
                                        <label for=""> User name</label>
                                        <input type="text" name="name" placeholder="Your name.."
                                            class="JLJ-B zyHYP" value="{{ $user->name }}">
                                    </div>

                                    <div class="col-span-2">
                                        <label for=""> Email</label>
                                        <input type="text" name="email" placeholder="Your name.."
                                            class="JLJ-B zyHYP" value="{{ $user->email }}">
                                    </div>
                                    <div class="col-span-2">
                                        <label for=""> Phone Number</label>
                                        <input type="text" name="phone" placeholder="Your name.."
                                            class="JLJ-B zyHYP" value="{{ $user->phone }}">
                                    </div>
                                    <div class="col-span-2">
                                        <label for="">Bio</label>
                                        <textarea id="" name="user_bio" rows="3"
                                            class="JLJ-B zyHYP">{{ $user->user_bio }}</textarea>
                                    </div>
                                    <div class="col-span-2">
                                        <label for=""> Relationship </label>
                                        <select id="relationship" name="user_relationship_status"
                                            class="JLJ-B zyHYP">

                                            <option value="{{ $user->user_relationship_status }}">
                                                {{ $user->user_relationship_status }}</option>
                                            <option value="0">None</option>
                                            @foreach ($user_relationship_status as $status)
                                                @if ($status == $user->user_relationship_status)
                                                    @continue
                                                @endif
                                                <option value="{{ $status }}">{{ $status }}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                    @csrf
                                    @method('PUT')

                                </div>
                                <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                    <a href="{{ route('profile', Auth::user()->id) }}">
                                        <span
                                            class="sqdOP L3NKy bg-gray-50 text-black"> Cancel
                                        </span>
                                    </a>
                                    <input type="submit" class="sqdOP L3NKy y3zKF" value="Save">
                                </div>


                            </form>

                        </div>
                    </div>

                    <div class="grid lg:grid-cols-3 mt-12 gap-8">

                        <div>
                            <h3 class="text-xl mb-2"> Privacy</h3>
                            <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                        </div>
                        <div class="bg-white rounded-md lg:shadow-lg shadow lg:p-6 p-4 col-span-2">

                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Who can follow me ?</h4>
                                        <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch"><input type="checkbox"><span
                                                    class="switch-button"></span> </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Show my activities ?</h4>
                                        <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch"><input type="checkbox" checked><span
                                                    class="switch-button"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Search engines?</h4>
                                        <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch"><input type="checkbox"><span
                                                    class="switch-button"></span> </label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h4> Allow Commenting?</h4>
                                        <div> Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                        </div>
                                    </div>
                                    <div class="switches-list -mt-8 is-large">
                                        <div class="switch-container">
                                            <label class="switch"><input type="checkbox"><span
                                                    class="switch-button"></span> </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="Password" class="grid lg:grid-cols-3 mt-12 gap-8 hidden">
                    <div>
                        <h3 class="text-xl mb-2"> Password</h3>
                        <p> Lorem ipsum dolor sit amet nibh consectetuer adipiscing elit</p>
                    </div>
                    <div class="bg-white rounded-md lg:shadow-lg shadow col-span-2">

                        <form action="{{ route('changePassword', $user->id) }}" method="post" enctype="multipart/form-data">
                            <div class="grid grid-cols-2 gap-3 lg:p-6 p-4">
                                <div class="col-span-2">
                                    <label for=""> Old Password</label>
                                    <input type="Password" name="password" placeholder="Password"
                                        class="JLJ-B zyHYP" value="">
                                          @if (Session('current_password_error'))
                                    <span class="help-block">
                                        <strong style="color: red;"> {{Session('current_password_error')}}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="col-span-2">
                                    <label for=""> New Password </label>
                                    <input type="Password" name="new_password" placeholder="Password"
                                        class="JLJ-B zyHYP" value="">
                                        @if (Session('same_password_error'))
                                    <span class="help-block">
                                        <strong style="color: red;"> {{Session('same_password_error')}}</strong>
                                    </span>
                                @endif
                                </div>

                                <div class="col-span-2">
                                    <label for=""> Confirm Password</label>
                                    <input type="Password" name="password_confirmation" placeholder="Confirm Password"
                                        class="JLJ-B zyHYP" value="">
                                        @if (Session('not_mach_password_error'))
                                    <span class="help-block">
                                        <strong style="color: red;"> {{Session('not_mach_password_error')}}</strong>
                                    </span>
                                @endif
                                </div>

                                @csrf
                                @method('PUT')

                            </div>
                            <div class="bg-gray-10 p-6 pt-0 flex justify-end space-x-3">
                                <a href="{{ route('profile', Auth::user()->id) }}">
                                    <span
                                        class="sqdOP L3NKy bg-gray-50 text-black"> Cancel
                                    </span>
                                </a>
                                <input type="submit" class="sqdOP L3NKy y3zKF" value="Save">
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("uk-active");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("uk-active");
            });
        });

        document.getElementById("default-tab").click();
    </script>

</x-layout>
