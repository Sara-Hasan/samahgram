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
                <h1 class="NXVPg Szr5J  coreSpriteLoggedOutWordmark  ">Instagram</h1>
                <div class="P8adC">
                   <form class="XFYOY"  method="POST" action="{{ route('register') }}">
                    @csrf
                      <h2 class="vvzhL ">Sign up to see photos and videos from your friends.</h2>
                      {{-- <div class="qF0y9  Igw0E IwRSH eGOV_  _4EzTm bkEs3 CovQj jKUp7 DhRcB"><button class="sqdOP L3NKy y3zKF" type="button"><span class="coreSpriteFacebookIconInverted cneKx"></span>Log in with Facebook</button></div>
                      <div class="K-1uj hKTMS">
                         <div class="s311c"></div>
                         <div class="_0tv-g">or</div>
                         <div class="s311c"></div>
                      </div> --}}
                      <div class="WZdjL">
                        <div class="_9GP1n">
                           <label class="f0n8F FATdn "><span class="_9nyy2">Full Name</span><input  aria-required="false" autocapitalize="sentences" autocorrect="off" name="name" type="text" class="_2hvTZ pexuQ zyHYP @error('name') is-invalid @enderror" value="{{ old('name') }}" required></label>
                           <div class="i24fI"></div>
                        </div>
                     </div>

                   <div class="WZdjL">
                     @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                    </div>

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

                      <div class="WZdjL">

                         <div class="_9GP1n">
                             <span>
                                <select name="phone1" id="phone" class="f0n8F bg-gray-100 text-xs cneKty" >
                                    @foreach ($Getcountrylist as $key => $Country)
                                        <option value="{{ $key }}" {{($Country==='JO') ? 'selected' : ""}}>{{ $Country }} - {{ $key }}</option>
                                    @endforeach
                                </select>
                        </span>
                        <span>
                            <label class="f0n8F FATdn ">
                            <span class="_9nyy2">Mobile Number</span>
                            <input aria-label="Mobile Number" aria-required="true" autocapitalize="off" autocorrect="off"  name="phone" type="text" class="_2hvTZ pexuQ zyHYP" value="{{ old('phone') }}" >
                            </label>

                            <div class="i24fI">
                            </div>
                        </span>
                         </div>
                      </div>

                      <div class="WZdjL">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                       </div>

                      <div class="WZdjL">
                         <div class="_9GP1n">
                            <label class="f0n8F FATdn "><span class="_9nyy2">Password</span><input aria-label="Password" aria-required="true" autocapitalize="off" autocomplete="new-password" autocorrect="off" name="password" type="password" class="_2hvTZ pexuQ zyHYP  @error('password') is-invalid @enderror" value="" required></label>
                            <div class="i24fI"></div>
                         </div>
                      </div>
                      <div class="WZdjL">
                        <div class="_9GP1n">
                           <label class="f0n8F FATdn "><span class="_9nyy2">Confirm Password</span><input aria-label="Password" aria-required="true" autocapitalize="off" autocomplete="new-password" autocorrect="off" name="password_confirmation" type="password" class="_2hvTZ pexuQ zyHYP" value="" required></label>
                           <div class="i24fI"></div>
                        </div>
                     </div>

                     <div class="WZdjL">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                         @enderror
                       </div>


                       <div class="WZdjL">
                        <div class="_9GP1n">
                            <select name="user_gender" id="user_gender"  class="f0n8F bg-gray-100 text-xs cneKty" required autocomplete="user_gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                     </div>

                     <div class="WZdjL">
                        <div class="_9GP1n">
                            <label class="f0n8F FATdn "><span class="_9nyy2">Date of birthday</span><input aria-label="date of birthday" aria-required="true" autocapitalize="off" autocomplete="user_gender" autocorrect="off" name="user_dob" type="date" class="_2hvTZ pexuQ zyHYP" value="{{ old('user_dob') }}" required></label>
                             <div class="i24fI"></div>
                        </div>
                     </div>

                   <div class="WZdjL">
                     @error('user_dob')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                      @enderror
                    </div>


                      <div>
                         <div class="qF0y9 Igw0E IwRSH eGOV_   _4EzTm bkEs3 CovQj jKUp7 DhRcB ">
                             <button  class="sqdOP L3NKy y3zKF"  type="submit">Sign up</button></div>
                      </div>
                      <p class="ZGwn1">By signing up, you agree to our <a href="https://help.instagram.com/581066165581870" tabindex="0" target="_blank">Terms</a> , <a href="https://help.instagram.com/519522125107875" tabindex="0" target="_blank">Data Policy</a> and <a href="/legal/cookies/" tabindex="0" target="_blank">Cookies Policy</a> .</p>
                   </form>
                </div>
             </div>
             <div class="gr27e">
                <p class="izU2O ">Have an account? <a data-testid="log-in-link" href="/login" tabindex="0">Log in</a></p>
             </div>

          </div>
       </div>
    </main>

 </section>
@endsection
