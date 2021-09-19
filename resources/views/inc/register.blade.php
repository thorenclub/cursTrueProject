@extends('headers.white')

<head><title>Главная</title></head>

<div class="all-screen">
@section('header')
<div class="content-board">

            <h1 class="h1-2">регистрация</h1>
            <form action="" method="post">
                <div class="input-div">
                    <label class="input-up" for="login">Логин</label>
                    <input type="text" class="input-default" placeholder="Введите ваш логин..." name="login" id="login" required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="username">Имя</label>
                    <input type="text" class="input-default" placeholder="Введите ваше имя..." name="username" id="username" required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="usersecondname">Фамилия</label>
                    <input type="text" class="input-default" placeholder="Введите вашу фамилию..." name="usersecondname" id="usersecondname" required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="userthirdname">Отчество</label>
                    <input type="text" class="input-default" placeholder="Введите ваше отчество..." name="userthirdname" id="userthirdname" required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="pass">Пароль</label>
                    <input type="password" class="input-default" placeholder="Введите ваш пароль..." name="pass" id="pass" required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="phone">Телефон</label>
                    <input type="tel" pattern="(\+?\d[- .]*){7,13}" class="input-default" placeholder="+79123456789" name="phone" id="phone" required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="email">E-mail</label>
                    <input type="email" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" class="input-default" placeholder="Введите ваш E-mail..." name="email" id="email" required="required">
                </div>
                <button class="button-white">зарегистрироваться</button>
            </form>
        </div>
        </div>
    
    </div>
    </div>
    @endsection
