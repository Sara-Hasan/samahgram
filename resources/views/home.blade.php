<x-layout>

    <main class="div_set SCxLW  o64aR " role="main">
        <section class="div_set _1SP8R C3uDN j9XKR  ">
            <div class="div_set cGcGK">
                @if ($posts !== null)


                @foreach($posts as $post)
                <div>
                    <div>
                        <article class="_8Rm4L bLWKA M9sTE _1gNme  L_LMM SgTZ1   ePUX4 " role="presentation" tabindex="-1">
                            <div class="div_set  qF0y9  Igw0E IwRSH YBx95   _4EzTm  " style="max-height: inherit; max-width: inherit;">
                                <div class="div_set UE9AK ">
                                    <div class="qF0y9  Igw0E   rBNOH  CcYR1  ybXk5_4EzTm  ">
                                        <section class=" div_set Ppjfr">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- h5uC0 mrq0Z" aria-disabled="false" role="button" tabindex="0">
                                                    <canvas class="CfWVH" height="42" width="42" style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <span class="_2dbep " role="link" tabindex="-1" style="width: 32px; height: 32px;"><a href="{{route('profile',$post->user->id)}}"><img alt="royatv's profile picture" class="_6q-tv" crossorigin="anonymous" data-testid="user-avatar" draggable="false" src="{{$post->user->user_img}}"></a></span>
                                                </div>
                                            </div>
                                            <div class="div_set o-MQd z8cbW ">
                                                <div class="div_set  RqtMr">
                                                    <div class="div_set e1e1d">
                                                        <span class="Jv7Aj mArmR MqpiF  ">
                                                        <a class="sqdOP yWX7d _8A5w5 ZIAjV " href="{{route('profile',$post->user->id)}}" tabindex="0">{{$post->user->name}}</a>
                                                    </span></div>
                                                </div>
                                                <div class="div_set M30cS">
                                                    <div></div>
                                                    <div class="div_set JF9hh"></div>
                                                </div>
                                            </div>
                                        </section>
                                        <div class="div_set MEAGs">
                                        </div>
                                    </div>
                                </div>
                                <div class="div_set _97aPb   ">
                                    <div role="button" class="ZyFrc" tabindex="0">
                                        <div class="div_set eLAPa kPFhm">
                                            <div class="div_set KL4Bh" style="padding-bottom: 100%;"><img crossorigin="anonymous" class="FFVAD" src="{{$post->post_img}}" style="object-fit: cover;"></div>
                                            <a href="{{route('posts.show',$post->id)}}">
                                                <div class="div_set _9AhH0"></div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  ">
                                    <div class="div_set cv3IO  ">
                                        <div class="div_set eo2As  ">
                                            <section class="ltpMr  Slqrh">
                                                <span class="fr66n">
                                                    <button class="wpO6b  " type="button">
                                                        <div class="div_set QBdPU rrUvL">
                                                            <span class="">

                                                                <svg aria-label="Like" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                                                    <path d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                                                    </path>
                                                                </svg>

                                                            </span>
                                                        </div>

                                                    </button>

                                                </span>
                                                {{-- <form action="{{ route('like.post', $post->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button
                                                        class="{{ $post->liked() ?  : '' }} ">
                                                        like
                                                    </button>
                                                </form>

                                                <form action="{{ route('unlike.post', $post->id) }}"
                                                    method="post">
                                                    @csrf
                                                    <button
                                                        class="{{ $post->liked() ? 'block' : 'hidden'  }} px-4 py-2 text-black bg-red-600">
                                                        unlike
                                                    </button>
                                                </form> --}}
                                                <span class="_15y0l">
                                                    <label class="wpO6b " type="button">
                                                        <div class="div_set QBdPU rrUvL">
                                                            <svg aria-label="Comment" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                                                <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="2"></path>
                                                            </svg>
                                                        </div>
                                                    </م>
                                                </span>
                                            </section>
                                            <section class="EDfFK ygqzn">
                                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ ybXk5 vwCYk">
                                                    <div class="div_set Nm9Fw"><a class="zV_Nj" href="/p/CX6WlJyImIo/liked_by/" tabindex="0"><span>{{$post->post_likes_number}}</span> likes</a></div>
                                                </div>
                                            </section>
                                            <div class="div_set EtaWk kk">
                                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  ">
                                                    <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   pjcA_   ">
                                                        <div class="div_set   QzzMF Igw0E IwRSH  eGOV_vwCYk   " data-testid="post-comment-root">
                                                        <span class="Jv7Aj mArmR MqpiF  ">
                                                            <a class="FPmhX notranslate MBL3Z" title="{{$post->user->name}}" href="{{route('profile',$post->user->id)}}" tabindex="0">{{$post->user->name}}</a>
                                                        <span class="_8Pl3R">{{$post->post_text}}</span>                                                        </span>

                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   pjcA_"><a class="r8ZrO" href="{{route('posts.show',$post->id)}}" tabindex="0">
                                                            View all <span>{{$post->comments->count() }}</span> comments</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="div_set k_Q0X I0_K8  NnvRN"><a class="c-Yi7" href="/p/CX6WlJyImIo/" tabindex="0"><time class="_1o9PC Nzb55" datetime="2021-12-25T16:00:48.000Z" title="Dec 25, 2021">17
                                                        hours ago</time></a></div>
                                            <section class="sH9wk  _JgwE ">
                                                <div class="div_set RxpZH">
                                                    <form class="X7cDz"  action="/comments" method="POST">
                                                        @csrf

                                                        <input type="hidden" name="post_id" value="{{ $post->id }}">

                                                        <button class="wpO6b  " type="button">
                                                            <div class="div_set QBdPU ">
                                                                <svg aria-label="Emoji" class="_8-yf5 " color="#262626" fill="#262626" height="24" role="img" viewBox="0 0 24 24" width="24">
                                                                    <path d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <div class="div_set " style="right: 53px; bottom: 355px;"> </div>
                                                        <textarea name="comment_text" aria-label="Add a comment…" data-testid="post-comment-text-area" placeholder="Add a comment…" class="Ypffh" autocomplete="off" autocorrect="off"></textarea>
                                                        <button class="sqdOP yWX7d y3zKF " data-testid="post-comment-input-button" name="submit" type="submit">Post</button>
                                                    </form>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                @endforeach


                @else

                <h1 class="mt-12 text-center">
                    <strong>Nothing to show here now
                        Enjoy your mustache</strong>
                </h1>
                @endif

            </div>
            <div class="div_set XmSS_"></div>
            <div class="div_set COOzN MnWb5 YT6rB" style="left: 1150px;">
                <div class="div_set m0NAq xrWdL">
                    <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   ItkAi   " style="width: 100%;">
                        <div aria-labelledby="f1c71c35275658c f2aa0ffc34ea934 f20d1ca8a74c4d f159aa1bfd7238c" class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm  ">
                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                <div class="div_set RR-M-  _2NjG_" aria-disabled="true" role="button" tabindex="-1">
                                    <canvas class="CfWVH" height="66" width="66" style="position: absolute; top: -5px; left: -5px; width: 66px; height: 66px;"></canvas>
                                    <a class="_2dbep qNELH kIKUG" href="{{route('profile',$login_user->id)}}" tabindex="0" style="width: 56px; height: 56px; display: block;"><img alt="abualhaj.designer's profile picture" class="_6q-tv" crossorigin="anonymous" data-testid="user-avatar" draggable="false" src="{{$login_user->user_img}}"></a>
                                </div>
                            </div>
                            <div class="div_set  qF0y9  Igw0E IwRSHYBx95  vwCYk   ">
                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="f2aa0ffc34ea934">
                                    <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ ybXk5   vwCYk n4cjz   "><a class="gmFkV" href="{{route('profile',$login_user->id)}}" tabindex="0">{{$login_user->name}}</a></div>
                                    </div>
                                </div>
                                <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="f20d1ca8a74c4d">
                                    <div class="div_set _7UhW9   xLCgt  MMzan   _0PwGv fDxYl ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_vwCYkn4cjz   ">
                                            <div class="div_set _7UhW9   xLCgt  MMzan   _0PwGv fDxYl ">{{$login_user->name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div_set  qF0y9  Igw0E   rBNOH  YBx95   ybXk5_4EzTm  soMvl" id="f1c71c35275658c">
                                <button class="sqdOP yWX7d y3zKF " type="button">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="div_set _8UZ6e">
                    <div class=" qF0y9  Igw0E   rBNOH eGOV_ ybXk5_ 4EzTm   _49XvD XfCBB XTCZH  ">
                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ vwCYk   ">
                            <div class="div_set _7UhW9   xLCgt   qyrsm  _0PwGv uL8Hv ">Suggestions For You</div>
                        </div>
                        <a class="sqdOP yWX7d _8A5w5  ZIAjV " href="{{route('trending')}}" tabindex="0">
                            <div class="div_set _7UhW9  PIoXz qyrsm KV-D4  uL8Hv ">See All</div>
                        </a>
                    </div>
                    <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm   pjcA_  WKY0a ">
                        <div class="div_set    tHaIX  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm HVWg4 ">
                            <div style="height: auto; overflow: hidden auto;">
                                <div style="flex-direction: column; padding-bottom: 0px; padding-top: 0px;">


                                    @foreach ($users as $user)

                                    <div aria-labelledby="f2b15f2c8ac22dc f12497ab744395 f139da0bb4a3c8c f1cde44ba153cb" class=" qF0y9  Igw0E   rBNOH eGOV_  ybXk5 _4EzTm   XfCBB  HVWg4 ">
                                        <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm yC0tu ">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- " aria-disabled="true" role="button" tabindex="-1">
                                                    <canvas class="CfWVH" height="42" width="42" style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <a class="_2dbep qNELH kIKUG" href="{{ route('profile',$user->id )}}" tabindex="0" style="width: 32px; height: 32px; display: block;"><img alt="saif_ghazawi's profile picture" class="_6q-tv" crossorigin="anonymous" data-testid="user-avatar" draggable="false" src="{{ $user->user_img }}"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E IwRSH YBx95  vwCYk   ">
                                            <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  " id="f12497ab744395">
                                                <div class="div_set _7UhW9   xLCgt  MMzan  KV-D4  fDxYl "><span class="Jv7Aj mArmR MqpiF  "><a class="FPmhX notranslate MBL3Z" title="saif_ghazawi" href="{{ route('profile',$user->id )}}" tabindex="0">{{ $user->name }}</a></span></div>
                                            </div>
                                            {{-- <div class="div_set  qF0y9  Igw0E IwRSH  eGOV_ _4EzTm  DhRcB" id="f1cde44ba153cb">
                                                <div class="div_set _7UhW9  PIoXz   MMzan   _0PwGv fDxYl ">Followed by
                                                    mhmadalnwaiseh + 3 more</div>
                                            </div> --}}
                                        </div>
                                        <div class="div_set  qF0y9  Igw0E  rBNOH  YBx95  ybXk5 _4EzTm  soMvl" id="f2b15f2c8ac22dc">
                                            <button class="sqdOP yWX7d y3zKF " type="button">
                                                <a href="{{ route('profile',$user->id )}}">
                                                    <div class="div_set _7UhW9  PIoXz qyrsm   uL8Hv ">Follow</div>
                                                </a>
                                            </button>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div>
            <form enctype="multipart/form-data" method="POST" role="presentation"><input accept="image/jpeg,image/png" class="tb_sK" type="file"></form>
        </div>
        <div class="div_set vgS-T"></div>
    </main>
</x-layout>
