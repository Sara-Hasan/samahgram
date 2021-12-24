@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-5" style="width: 150.666667%;">
{{--            <div class="lg:p-12 max-w-md max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="77/79/78-0000000">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                            <div class="flex lg:flex-row flex-col lg:space-x-2" style="margin-left:310px;">
                                <select name="user_gender" id="user_gender"  class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" required autocomplete="user_gender" style="border: 1px solid #d3d5d8 !important;width: 150px;padding-left: 5px;">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <input id="user_dob" type="date" class="bg-gray-200 mb-2 shadow-none  dark:bg-gray-800" name="user_dob"  required autocomplete="user_gender" style="border: 1px solid #d3d5d8 !important;width: 288px;padding-left: 5px;">
                            </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@endsection
