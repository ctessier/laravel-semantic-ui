@extends('layouts.app')

@section('content')
<div class="ui centered grid">
    <div class="sixteen wide smartphone ten wide tablet six wide computer column">
        <h3 class="ui top attached header">
            Login
        </h3>
        <div class="ui attached segment">
            <form class="ui form" role="form" method="POST" action="{{ url('/login') }}">

                {{ csrf_field() }}

                <div class="field">
                    <div class="ui left icon input">
                        <i class="at icon"></i>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            placeholder="E-Mail Address" class="{{ $errors->has('email') ? 'error' : '' }}">
                    </div>

                    @if ($errors->has('email'))
                        <div class="ui pointing red basic label">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input id="password" type="password" name="password" required
                               placeholder="Password" class="{{ $errors->has('password') ? 'error' : '' }}">
                    </div>

                    @if ($errors->has('password'))
                        <div class="ui pointing red basic label">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <button type="submit" class="ui fluid button">
                    Login
                </button>
            </form>
        </div>
        <a class="btn btn-link" href="{{ url('/password/reset') }}">
            Forgot Your Password?
        </a>
    </div>
</div>
@endsection
