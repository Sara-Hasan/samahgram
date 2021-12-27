@extends('layouts.app')

@section('content')
<style>
    #react-root, article, div, footer, header, main, nav, section {
    -webkit-box-align: stretch;
    -webkit-align-items: stretch;
    -ms-flex-align: stretch;
    align-items: stretch;
    border: 0 solid #000;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-shrink: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin: 0;
    padding: 0;
    position: relative;
}
</style>
<section class="_9eogI E3X2T">
    <div></div>
    <main class="SCxLW  o64aR " role="main">
        <article class="_4_yKc">
            <div class="yOZjD _80tAB">
                <div class="V64Sp"><img alt="" class="RP4i1 JtrJi "
                        src="assets/images/logo.png"></div>
            </div>
            <div class="rgFsT">
                <div class="gr27e">
                    <div class="Logo mt-8">
                        <!-- Logo -->
                        <a href="{{ route('home') }}">
                            <img src="assets/images/logo.png"
                                alt="">
                        </a>
                    </div>                    <div class="EPjEi">

                        <form class="HmktE" id="loginForm"  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="qF0y9 Igw0E IwRSH  eGOV_ _4EzTm kEKum ">

                                <div class="-MzZI">
                                    <div class="_9GP1n ">
                                        <label class="f0n8F FATdn"><span class="_9nyy2">Email</span>
                                                <input aria-label="email"
                                                aria-required="true" autocapitalize="off" autocorrect="off"
                                                 id="email" name="email" type="email" class="_2hvTZ pexuQ zyHYP @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus></label>
                                        <div class="i24fI"></div>
                                    </div>
                                </div>
                                <div class="-MzZI">
                                    <div class="_9GP1n   ">
                                        <label class="f0n8F FATdn"><span class="_9nyy2">Password</span>
                                            <input
                                                aria-label="Password" aria-required="true" autocapitalize="off"
                                                autocorrect="off" id="password" type="password"
                                                class="_2hvTZ pexuQ zyHYP @error('password') is-invalid @enderror" name="password" required ></label>
                                        <div class="i24fI">
                                        </div>
                                    </div>
                                </div>
                                <div class="-MzZI flex flex-row mt-2">

                                <input class="form-check-input m-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label text-xs ml-2 " for="remember">
                                    Remember Me
                                </label>
                                 </div>
                                 <div class="-MzZI">
                                 @error('email')
                                 <span class="invalid-feedback " role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                @enderror
                            </div>
                                <div
                                    class="qF0y9 Igw0E IwRSH eGOV_  _4EzTm  bkEs3 CovQj jKUp7 DhRcB ">
                                    <button class="sqdOP L3NKy y3zKF" type="submit">
                                        <div class=" qF0y9  Igw0E IwRSH  eGOV_ _4EzTm ">
                                          Log In
                                        </div>
                                    </button>
                                </div>
                                {{-- <div class="K-1uj Z7p_S">
                                    <div class="s311c"></div>
                                    <div class="_0tv-g">or</div>
                                    <div class="s311c"></div>
                                </div>
                                <div class=" qF0y9  Igw0E IwRSH eGOV_ _4EzTm bkEs3 CovQj  jKUp7  DhRcB ">
                                    <button class="sqdOP yWX7d  y3zKF " type="button"><span
                                            class=" coreSpriteFacebookIcon AeB99"></span><span class="KPnG0">Log in with
                                            Facebook</span></button></div> --}}
                            </div>




                            @if (Route::has('password.request'))
                            <a class="_2Lks6" href="{{ route('password.request') }}" tabindex="0">Forgot password?</a>
                        @endif

                        </form>
                    </div>
                </div>
                <div class="gr27e">
                    <div class="_7UhW9 xLCgt MMzan _0PwGv  uL8Hv ">
                        <p class="izU2O ">Don't have an account? <a data-testid="sign-up-link"
                                href="/signup" tabindex="0"><span
                                    class="_7UhW9 xLCgt qyrsm gtFbE se6yk ">
                                    Sign up</span></a></p>
                    </div>
                </div>
            </div>
        </article>
    </main>
</section>
@endsection
