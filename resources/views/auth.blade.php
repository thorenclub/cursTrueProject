@extends('core.content')

@section('title', 'Sign In')

    @section('content')
        <div class="content-board">
            <h2 class="h2_tall_black">Авторизация</h1>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="input-div">
                    <label class="input-up" for="login">Логин</label>
                    <input type="text" class="input-default" placeholder="Введите ваш логин..." name="login" id="login"
                           required="required">
                </div>
                <div class="input-div">
                    <label class="input-up" for="pass">Пароль</label>
                    <input type="password" class="input-default" placeholder="Введите ваш пароль..." name="password"
                           id="pass" required="required">
                </div>
                <button class="button_black">войти</button>
            </form>
        </div>
</div>

</div>
@endsection
