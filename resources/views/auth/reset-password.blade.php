@extends('layouts.admin')
@section('content')
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">{{ __('Reset Password') }}</h3>
                        <div class="box">
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf

                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <!-- Email Address -->
                                <div>
                                    <input name="email" :value="old('email', $request->email)" type="email" class="input is-large @error('email') is-invalid @enderror" id="email" placeholder="Email" required autofocus >
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <input name="password" type="password" class="input is-large @error('password') is-invalid @enderror" id="password" placeholder="New Password" required >
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <input name="password_confirmation" type="password" class="input is-large" id="password_confirmation" placeholder="Confirm New Password" required >
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button type="submit" class="button is-info is-fullwidth is-large">{{ __('Reset Password') }}</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
