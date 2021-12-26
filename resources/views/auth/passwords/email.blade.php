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
       <div class="qF0y9 Igw0E rBNOH YBx95 ybXk5 vwCYk MGky5 i0EQd" style="min-height: 100%;">
          <div class="rgFsT   ">
             <div class="gr27e  ">
                <span class="coreSpriteLockSmall MGdpg MGdpgt"></span>
                   <div class="P8adC">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                   <form class="XFYOY"  method="POST" action="{{ route('password.email') }}">
                    @csrf
                      <h2 class="_7UhW9 vy6Bb qyrsm KV-D4 uL8Hv  l4b0S MGdpg">Trouble Logging In?</h2>
                      <p class="ZGwn1">Enter your email, phone, or username and we'll send you a link to get back into your account.</p>
                      <div class="WZdjL">
                         <div class="_9GP1n">
                            <label class="f0n8F FATdn "><span class="_9nyy2">Email</span><input aria-label="Email" aria-required="true" autocapitalize="off" autocomplete="email" autocorrect="off" name="email" type="email" class="_2hvTZ pexuQ zyHYP @error('email') is-invalid @enderror" value="{{ old('email') }}" required></label>
                            <div class="i24fI"></div>
                         </div>
                      </div>
                      <div class="WZdjL">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                     </div>
                      <div>
                         <div class="qF0y9 Igw0E IwRSH eGOV_   _4EzTm bkEs3 CovQj jKUp7 DhRcB ">
                             <button  class="sqdOP L3NKy y3zKF"  type="submit">Send Login Link</button></div>
                      </div>
                    </form>

                      <div class="K-1uj hKTMS">
                        <div class="s311c"></div>
                        <div class="_0tv-g">or</div>
                        <div class="s311c"></div>
                     </div>
                     <div class="sqdOP8"><a class="sqdOP yWX7d   _8A5w5  ZIAjV "
                        href="/login" tabindex="0">Create New Account</a></div>

                </div>

             </div>
             <div class="pV7Qt tHaIX qF0y9  Igw0E   IwRSH J0Xm8 _4EzTm" style="height: 44px;"><a class="sqdOP yWX7d   _8A5w5  ZIAjV "
                href="/login" tabindex="0">Back To Login</a></div>

          </div>
       </div>
    </main>

 </section>

@endsection
