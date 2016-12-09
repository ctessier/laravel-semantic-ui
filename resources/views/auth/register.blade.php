@extends('layouts.app')

@section('content')
    <div class="ui centered grid">
        <div class="sixteen wide smartphone ten wide tablet six wide computer column">
            <h3 class="ui top attached header">
                Register
            </h3>
            <div class="ui attached segment">
                <form class="ui form" role="form" method="POST" action="{{ url('/register') }}">

                    {{ csrf_field() }}

                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                                   placeholder="Name" class="{{ $errors->has('name') ? 'error' : '' }}">
                        </div>

                        @if ($errors->has('name'))
                            <div class="ui pointing red basic label">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

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

                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input id="password_confirmation" type="password" name="password_confirmation" required
                                placeholder="Confirm Password">
                        </div>
                    </div>

                    <button type="submit" class="ui fluid button">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
