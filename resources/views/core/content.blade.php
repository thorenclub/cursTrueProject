<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
<section class="mainContent">
    @if(Request::is('/'))
        @yield('firstpage')
    @else
        <div class="header_home">
            <a href="/" class="logo-header"><img src="logo-black.svg" alt="Logo"></a>
            <div class="header_buttons">
                @if (\Illuminate\Support\Facades\Auth::guest())
                    <a href="/login">
                        <button class="button_black">Sign In</button>
                    </a>
                    <a href="/register">
                        <button class="button_black">Create account</button>
                    </a>
                @else
                    @if (\Illuminate\Support\Facades\Auth::user()['id_role'] === 1 || \Illuminate\Support\Facades\Auth::user()['id_role'] === 2)
                        <a href="">
                            <button class="button_red">Admin Tools</button>
                        </a>
                    @endif
                    <a href="">
                        <button class="button_black">Profile</button>
                    </a>
                    <a href="">
                        <button class="button_black">Create Project</button>
                    </a>
                    <a href="/logout">
                        <button class="button_black">Sign Out</button>
                    </a>
                @endif
            </div>
        </div>
        <div class="nav">
            <div class="just_yellow"></div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/developers">Developers & etc.</a></li>
                <li><a href="/portfilio">Our Works</a></li>
                <li><a href="/contacts">Contacts</a></li>
            </ul>
        </div>
        <div class="line"></div>
        @yield('content')
        <div class="footer"></div>
    @endif
</section>
</body>

</html>
