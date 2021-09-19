<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
<div class="header-black">
    <a href="/" class="logo-header"><img src="logo-black.svg" alt="Logo"></a>
    <div class="head-buttons">
        <a href="/admin" class="button" id="admin-panel">админ-панель</a>
        <section class="inv-20px"></section>
        <a href="/profile" class="button"><section class="button-grey">твой</section>&nbspпрофиль</a>
        <section class="inv-20px"></section>
        <a href="/exit" class="button"><section class="button-grey">твой</section>&nbspвыход</a>
        <section class="inv-20px"></section>
        <a href="/register" class="button"><section class="button-grey">наша</section>&nbspрегистрация</a>
        <section class="inv-20px"></section>
        <a href="/auth" class="button"><section class="button-grey">наша</section>&nbspавторизация</a>
    </div>
</div>
<div class="content-nav-friend">
<div class="navigation">
    <section class="just-block"></section>
    <section class="inv-10px"></section>
    <a href="/" class="button" id="nav"><section class="button-grey">наш</section>&nbspдом</a>
    <section class="inv-10px"></section>
    <a href="/employees" class="button" id="nav"><section class="button-grey">наши</section>&nbspпрофи</a>
    <section class="inv-10px"></section>
    <a href="/portfolio" class="button" id="nav"><section class="button-grey">наши</section>&nbspработы</a>
    <section class="inv-10px"></section>
    <a href="/contacts" class="button" id="nav"><section class="button-grey">наши</section>&nbspконтакты</a>
    <section class="inv-10px"></section>
    <a href="/createproject" class="button" id="nav"><section class="button-grey">наш</section>&nbspконструктор</a>
</div>
    @yield('header')
</body>
</html>
