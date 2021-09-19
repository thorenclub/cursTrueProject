@extends('headers.black')

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
</head>

<div class="first-screen">
@section('header')
        <div class="start-block">
            <h1 class="bigblock">
                создаём
                <section class="bold-big">
                Ваше
                </section>
                будущее
            </h1>
            <a href="/" class="button">приступить к созданию будущего</a>
        </div>
        </div>
@endsection
