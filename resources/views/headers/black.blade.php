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
    <a href="/" class="logo-header"><img src="logo-white.svg" alt="Logo"></a>
    <div class="head-buttons">
        <?php if(\Illuminate\Support\Facades\Auth::guest()): ?>
        <a href="/register" class="button">
            <section class="button-grey">наша</section>
            &nbspрегистрация</a>
        <section class="inv-20px"></section>
        <a href="/login" class="button">
            <section class="button-grey">наша</section>
            &nbspавторизация</a>
        <?php else: ?>
        <?php if (\Illuminate\Support\Facades\Auth::user()['id_role'] === 1): ?>
        <a href="admin-panel.php" class="button" id="admin-panel">админ-панель</a>
        <section class="inv-20px"></section>
        <?php endif; ?>
        <?php if (\Illuminate\Support\Facades\Auth::user()['id_role'] === 2): ?>
        <a href="admin-panel.php" class="button" id="admin-panel">ХУЕРАТОР</a>
        <section class="inv-20px"></section>
        <?php endif; ?>
        <a href="profile.php" class="button">
            <section class="button-grey">твой</section>
            &nbspпрофиль</a>
        <section class="inv-20px"></section>
        <a href="/logout" class="button">
            <section class="button-grey">твой</section>
            &nbspвыход</a>
        <section class="inv-20px"></section>
    <?php endif; ?>
    </div>
</div>
<div class="navigation">
    <section class="just-block"></section>
    <section class="inv-10px"></section>
    <a href="index.php" class="button" id="nav">
        <section class="button-grey">наш</section>
        &nbspдом</a>
    <section class="inv-10px"></section>
    <a href="profi.php" class="button" id="nav">
        <section class="button-grey">наши</section>
        &nbspпрофи</a>
    <section class="inv-10px"></section>
    <a href="works.php" class="button" id="nav">
        <section class="button-grey">наши</section>
        &nbspработы</a>
    <section class="inv-10px"></section>
    <a href="contacts.php" class="button" id="nav">
        <section class="button-grey">наши</section>
        &nbspконтакты</a>
    <section class="inv-10px"></section>
    <a href="createproject.php" class="button" id="nav">
        <section class="button-grey">наш</section>
        &nbspконструктор</a>
    <img src="arrow-start.svg" alt="" class="arrow-start">
</div>
@yield('header')
</body>
</html>
