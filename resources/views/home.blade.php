@extends('core.content')

@section('title', 'Classic Outsource')

@section('firstpage')
    <section class="firstScreen">
        <div class="header_home">
            <a href="/" class="logo-header"><img src="logo-white.svg" alt="Logo"></a>
            <div class="header_buttons">
                @if (\Illuminate\Support\Facades\Auth::guest())
                    <a href="/login">
                        <button class="button_white">Sign In</button>
                    </a>
                    <a href="/register">
                        <button class="button_white">Create account</button>
                    </a>
                @else
                    @if (\Illuminate\Support\Facades\Auth::user()['id_role'] === 1 || \Illuminate\Support\Facades\Auth::user()['id_role'] === 2)
                        <a href="">
                            <button class="button_red">Admin Tools</button>
                        </a>
                    @endif
                    <a href="/profile">
                        <button class="button_white">Profile</button>
                    </a>
                    <a href="/createproject">
                        <button class="button_white">Create Project</button>
                    </a>
                    <a href="/logout">
                        <button class="button_white">Sign Out</button>
                    </a>
                @endif
            </div>
        </div>
        <div class="nav_home">
            <div class="just_yellow"></div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/developers">Developers & etc.</a></li>
                <li><a href="/portfilio">Our Works</a></li>
                <li><a href="/contacts">Contacts</a></li>
            </ul>
        </div>
        <div class="firstScreen_centerText">
            <h1 class="h1_tall">Create</h1>
            <h1 id="h1_yellow">Your</h1>
            <h1 class="h1_tall">Future</h1>
            @if (\Illuminate\Support\Facades\Auth::guest())
                <a href="/login">
                    <button class="button_white" id="button_yellow">Start project...</button>
                </a>
            @else
                <a href="/createproject">
                    <button class="button_white" id="button_yellow">Start project...</button>
                </a>
            @endif
        </div>
    </section>
    <section class="newsScreen">

    </section>
@endsection
