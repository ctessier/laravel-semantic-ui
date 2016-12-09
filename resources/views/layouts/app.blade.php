<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ elixir('assets/css/semantic.css') }}" rel="stylesheet">
        <link href="{{ elixir('assets/css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body>
        <div class="ui top fixed menu">
            <div class="ui container">
                <div class="header item">
                    {{ config('app.name', 'Laravel') }}
                </div>
                @if (Auth::guest())
                    <a href="{{ url('/login') }}" class="item">Login</a></li>
                    <a href="{{ url('/register') }}" class="item">Register</a></li>
                @else
                    <div class="ui simple dropdown item right">
                        {{ Auth::user()->name }}
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            <a href="{{ url('/logout') }}" class="item"
                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="ui container">
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ elixir('assets/js/jquery.js') }}"></script>
        <script src="{{ elixir('assets/js/semantic.js') }}"></script>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
