@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="background-color: #e3e7ed;">
                    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                    <div class="card-body">
                        <!-- Default form subscription -->
                        <form method="POST" action="{{ route('login') }}" class="text-center border border-light p-5">
                            @csrf

                            <p class="h4 mb-4">Login</p>
                            <p></p>

                            <p>Enter Your Login details here.</p>

                            <p></p>
                                {{-- <a href="" target="_blank">See the last newsletter</a> --}}

                            <!-- Name -->
                            <input id="email" type="email" class="form-control mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                {{-- </div> --}}

                            <!-- Email -->
                            <input id="password" type="password" class="form-control mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                            {{-- <div class="form-group row"> --}}
                            <div class="col-md-6 mb-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        {{-- </div> --}}
                            <!-- Sign in button -->
                                <button type="submit" class="btn btn-info btn-block">
                                    {{ __('Submit') }}
                                </button>


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                        </form>
    <!-- Default form subscription -->
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
