@extends('headers.white')

<head><title>Главная</title></head>

<div class="all-screen">
@section('header')
<div class="content-board">

    <h1 class="h1-2">авторизация</h1>
            <form action="" method="post">
                <div class="input-div">
                    <label class="input-up" for="login">Логин</label>
                    <input type="text" class="input-default" placeholder="Введите ваш логин..." name="login" id="login" required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="pass">Пароль</label>
                    <input type="password" class="input-default" placeholder="Введите ваш пароль..." name="pass" id="pass" required="required">
                </div>
                <button class="button-white">войти</button>
            </form>
        </div>
        </div>
    
    </div>
    </div>
    @endsection