@extends('layouts.app')

@section('content')
    <div class="ui centered grid">
        <div class="sixteen wide smartphone ten wide tablet six wide computer column">

            @if (session('status'))
                <div class="ui message success">
                    {{ session('status') }}
                </div>
            @endif

            <h3 class="ui top attached header">
                Reset Password
            </h3>
            <div class="ui attached segment">
                <form class="ui form" role="form" method="POST" action="{{ url('/password/email') }}">

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

                    <button type="submit" class="ui fluid button">
                        Send Password Reset Link
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
