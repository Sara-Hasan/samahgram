<x-layout>

    <main class="div_set SCxLW  o64aR " role="main">
        <div class="div_set Kj7h1  yJx9G">
            <div class="div_set ltEKP">
                <article class="QBXjJ M9sTE   L_LMM  JyscU  ePUX4 " role="presentation" tabindex="-1">
                    <div class="div_set qF0y9 Igw0E     IwRSH        YBx95   ybXk5    _4EzTm  "
                        style="max-height: inherit; max-width: inherit;">
                        <div class="div_set _97aPb   wKWK0">
                            <div role="button" class="ZyFrc" tabindex="0">
                                <div class="div_set eLAPa kPFhm">
                                    <div class="div_set KL4Bh" style="padding-bottom: 100%;"><img
                                            alt="{{ $post->post_text }}" class="FFVAD" crossorigin="anonymous"
                                            decoding="auto" style="object-fit: cover;" sizes="598px"
                                            src="{{ $post->post_img }}">
                                    </div>
                                    <div class="div_set _9AhH0"></div>
                                </div>
                            </div>
                        </div>
                        <div class="div_set  qF0y9 Igw0E  IwRSH   eGOV_ _4EzTm ">
                            <div class="div_set cv3IO  ">
                                <div class="div_set UE9AK ">
                                    <div class="div_set     qF0y9 Igw0E   rBNOH  CcYR1  ybXk5    _4EzTm  ">
                                        <section class="div_set  Ppjfr">
                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                <div class="div_set RR-M- h5uC0 mrq0Z" aria-disabled="false"
                                                    role="button" tabindex="0">
                                                    <canvas class="CfWVH" height="42" width="42"
                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                    <span class="_2dbep " role="link" tabindex="-1"
                                                        style="width: 32px; height: 32px;"><img
                                                            alt="{{ $post->user->name }}" class="_6q-tv"
                                                            crossorigin="anonymous" data-testid="user-avatar"
                                                            draggable="false"
                                                            src="{{ $post->user->user_img }}"></span>
                                                </div>
                                            </div>
                                            <div class="div_set o-MQd z8cbW ">
                                                <div class="div_set PQo_0 RqtMr">
                                                    <div class="div_set e1e1d">
                                                        <span class="Jv7Aj mArmR MqpiF  "><a
                                                                class="sqdOP yWX7d     _8A5w5   ZIAjV "
                                                                href="/profile/{{ $post->user->id }}"
                                                                tabindex="0">{{ $post->user->name }}</a></span>
                                                        <div class="qF0y9 Igw0E  IwRSH  eGOV__4EzTm   WKY0a">
                                                        </div>
                                                    </div>
                                                    <div class="div_set bY2yH">
                                                        <div class="div_set qvG_g"><span
                                                                class="RPhNB FLVQW  _7qOna">•</span></div>

                                                        @if (auth()->user()->id == $post->user_id)
                                                            <form action="{{ route('posts.destroy', $post->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="sqdOP yWX7d  _8A5w5 delet"
                                                                    type="submit">Delete
                                                                </button>
                                                            </form>
                                                        @else

                                                            <a href="{{ route('profile',$post->user_id )}}">
                                                                <div class="sqdOP yWX7d  _8A5w5">Follow</div>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="div_set M30cS">
                                                    <div></div>
                                                    <div class="div_set JF9hh"></div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="div_set eo2As  ">
                                    <section class="ltpMr  Slqrh">
                                        <span class="fr66n">
                                            <button class="wpO6b  " type="button">

                                                <div class="div_set QBdPU rrUvL">
                                                    <span class="">
                                                        <svg aria-label="Like" class="_8-yf5 " color="#262626"
                                                            fill="#262626" height="24" role="img" viewBox="0 0 24 24"
                                                            width="24">
                                                            <path
                                                                d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                                            </path>
                                                        </svg>

                                                    </span>
                                                </div>
                                            </button>
                                        </span>
                                        <span class="_15y0l">
                                            <label for="comment_text" class="wpO6b  " type="button">

                                                <div class="div_set QBdPU rrUvL">
                                                    <svg aria-label="Comment" class="_8-yf5 " color="#262626"
                                                        fill="#262626" height="24" role="img" viewBox="0 0 24 24"
                                                        width="24">
                                                        <path d="M20.656 17.008a9.993 9.993 0 10-3.59 3.615L22 22z"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="2"></path>
                                                    </svg>
                                                </div>
                                            </label>
                                        </span>

                                    </section>

                                    <div class="div_set EtaWk">
                                        <ul class="XQXOT    pXf-y ">
                                            <div role="button" class="ZyFrc" tabindex="0">
                                                <li class="gElp9 rUo9f  PpGvg " role="menuitem">
                                                    <div class="div_set P9YgZ">
                                                        <div class="div_set C7I1f X7jCj">
                                                            <div class="div_set Jv7Aj mArmR   pZp3x">
                                                                <div class="div_set RR-M- h5uC0 TKzGu  "
                                                                    aria-disabled="false" role="button" tabindex="0">
                                                                    <canvas class="CfWVH" height="42"
                                                                        width="42"
                                                                        style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                                    <span class="_2dbep " role="link"
                                                                        tabindex="-1"
                                                                        style="width: 32px; height: 32px;"><img
                                                                            alt="{{ $post->user->name }}"
                                                                            class="_6q-tv"
                                                                            crossorigin="anonymous"
                                                                            data-testid="user-avatar" draggable="false"
                                                                            src="{{ $post->user->user_img }}"></span>
                                                                </div>
                                                            </div>
                                                            <div class=" div_set C4VMK ">
                                                                <h2 class="_6lAjh ">
                                                                    <div
                                                                        class="qF0y9 Igw0E     IwRSH      eGOV__4EzTm   ItkAi ">
                                                                        <span class="Jv7Aj mArmR MqpiF  "><a
                                                                                class="sqdOP yWX7d     _8A5w5   ZIAjV "
                                                                                href="/profile/{{ $post->user->id }}"
                                                                                tabindex="0">{{ $post->user->name }}</a></span>
                                                                    </div>

                                                                </h2>
                                                                <span
                                                                    class="">{{ $post->post_text }}</span>
                                                                <div
                                                                    class="    qF0y9 Igw0E     IwRSH      eGOV__4EzTm   pjcA_   aGBdT     ">
                                                                    <div
                                                                        class="_7UhW9  PIoXz       MMzan   _0PwGvuL8Hv">
                                                                        <time class="FH9sR RhOlS Nzb55"
                                                                            datetime="{{ $post->created_at->diffForHumans() }}"
                                                                            title="{{ $post->created_at->diffForHumans() }}">
                                                                            {{ $post->created_at->diffForHumans() }}</time>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                            @foreach ($post->comments as $comment)
                                                <ul class="Mr508 ">
                                                    <div role="button" class="ZyFrc" tabindex="0">
                                                        <li class="gElp9 rUo9f " role="menuitem">
                                                            <div class="div_set P9YgZ">
                                                                <div class="div_set C7I1f ">
                                                                    <div class="div_set Jv7Aj mArmR   pZp3x">
                                                                        <div class="div_set RR-M-  TKzGu  "
                                                                            aria-disabled="true" role="button"
                                                                            tabindex="-1">
                                                                            <canvas class="CfWVH" height="42"
                                                                                width="42"
                                                                                style="position: absolute; top: -5px; left: -5px; width: 42px; height: 42px;"></canvas>
                                                                            <a class="_2dbep qNELH kIKUG"
                                                                                href="/profile/{{ $comment->user_id }}"
                                                                                tabindex="0"
                                                                                style="width: 32px; height: 32px; display: block;"><img
                                                                                    alt="{{ $comment->user->name }} profile picture"
                                                                                    class="_6q-tv"
                                                                                    crossorigin="anonymous"
                                                                                    data-testid="user-avatar"
                                                                                    draggable="false"
                                                                                    src="{{ $comment->user->user_img }}"></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="div_set C4VMK">
                                                                        <h3 class="_6lAjh ">
                                                                            <div
                                                                                class="    qF0y9 Igw0E     IwRSH      eGOV__4EzTm   ItkAi        ">
                                                                                <span class="Jv7Aj mArmR MqpiF  "><a
                                                                                        class="sqdOP yWX7d     _8A5w5   ZIAjV "
                                                                                        href="/profile/{{ $comment->user_id }}"
                                                                                        tabindex="0">{{ $comment->user->name }}</a></span>
                                                                            </div>
                                                                        </h3>
                                                                        <span
                                                                            class="">{{ $comment->comment_text }}</span>
                                                                        <div class=" div_set   qF0y9 Igw0E     IwRSH      eGOV__4EzTm   pjcA_   aGBdT     ">
                                                                            <div class="div_set flex-row _7UhW9  PIoXz       MMzan   _0PwGvuL8Hv">
                                                                                <span class="gU-I7"
                                                                                    tabindex="0"><time
                                                                                        class="FH9sR RhOlS Nzb55"
                                                                                        datetime="{{ $comment->created_at->diffForHumans() }}"
                                                                                        title="{{ $comment->created_at->diffForHumans() }}">{{ $comment->created_at->diffForHumans() }}</time></span>
                                                                                @if (auth()->user()->id == $comment->user_id)

                                                                                        <button class="FH9sR">2
                                                                                            likes</button>
                                                                                        <form class="inline"
                                                                                            action="{{ route('comments.destroy', $comment->id) }}"
                                                                                            method="post">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button
                                                                                                class="delet">Delete</button>
                                                                                        </form>
                                                                                @endif


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            {{-- <span class="jdtwu">
                                                                <div class="div_set _2ic5v">
                                                                    <button class="wpO6b ZQScA " type="button">

                                                                        <div class="div_set QBdPU rrUvL">
                                                                            <span class="">
                                                                                <svg aria-label="Like"
                                                                                    class="_8-yf5 "
                                                                                    color="#262626" fill="#262626"
                                                                                    height="12" role="img"
                                                                                    viewBox="0 0 24 24" width="12">
                                                                                    <path
                                                                                        d="M16.792 3.904A4.989 4.989 0 0121.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 014.708-5.218 4.21 4.21 0 013.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 013.679-1.938m0-2a6.04 6.04 0 00-4.797 2.127 6.052 6.052 0 00-4.787-2.127A6.985 6.985 0 00.5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 003.518 3.018 2 2 0 002.174 0 45.263 45.263 0 003.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 00-6.708-7.218z">
                                                                                    </path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                            </span> --}}
                                                    </div>
                                                    </li>
                                    </div>
                                    <li>

                                    </li>
                                    </ul>
                                    @endforeach

                                    </ul>
                                </div>
                                <div class="div_set k_Q0X I0_K8  NnvRN"><span class="c-Yi7"
                                        tabindex="0"><time class="_1o9PC Nzb55"
                                            datetime="{{ $post->created_at->diffForHumans() }}"
                                            title="{{ $post->created_at->diffForHumans() }}">{{ $post->created_at->diffForHumans() }}</time></span>
                                </div>
                                <section class="sH9wk  _JgwE ">
                                    <div class="div_set RxpZH">


                                        <form class="X7cDz" action="/comments" method="POST">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <button class="wpO6b  " type="button">
                                                <div class="div_set QBdPU ">
                                                    <svg aria-label="Emoji" class="_8-yf5 " color="#262626"
                                                        fill="#262626" height="24" role="img" viewBox="0 0 24 24"
                                                        width="24">
                                                        <path
                                                            d="M15.83 10.997a1.167 1.167 0 101.167 1.167 1.167 1.167 0 00-1.167-1.167zm-6.5 1.167a1.167 1.167 0 10-1.166 1.167 1.167 1.167 0 001.166-1.167zm5.163 3.24a3.406 3.406 0 01-4.982.007 1 1 0 10-1.557 1.256 5.397 5.397 0 008.09 0 1 1 0 00-1.55-1.263zM12 .503a11.5 11.5 0 1011.5 11.5A11.513 11.513 0 0012 .503zm0 21a9.5 9.5 0 119.5-9.5 9.51 9.51 0 01-9.5 9.5z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </button>

                                            <textarea id="comment_text" name="comment_text" aria-label="Add a comment…"
                                                data-testid="post-comment-text-area" placeholder="Add a comment…"
                                                class="Ypffh" autocomplete="off" autocorrect="off"
                                                style="height: 18px !important;"></textarea>

                                            <button class="sqdOP yWX7d  y3zKF " data-testid="post-comment-input-button"
                                                type="submit">Post</button>
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
    </main>
</x-layout>
