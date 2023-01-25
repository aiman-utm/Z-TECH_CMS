@extends('layouts.admin')

@section('content')
<section class="hero is-light is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <h3 class="title has-text-grey">{{ __('Register') }}</h3>
                    <div class="box">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <input name="name" :value="old('name', $request->name)" type="name" class="input is-large @error('name') is-invalid @enderror" id="name" placeholder="Name" required autofocus >
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div class="mb-3">
                            <div>
                                <input name="email" :value="old('email', $request->email)" type="email" class="input is-large @error('email') is-invalid @enderror" id="email" placeholder="Email" required autofocus >
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="password" type="password" class="input is-large @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
                                @error('password')
                                   <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input name="password_confirmation" type="password" class="input is-large" id="password_confirmation" placeholder="Confirm New Password" required >
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('auth.login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <button type="submit" class="button is-info is-fullwidth is-large">{{ __('Register') }}</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
