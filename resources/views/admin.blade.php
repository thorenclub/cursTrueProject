
@extends('core.content')

@section('title', 'Админ-панель | Проекты')

@section('content')
    <div class="content-board">
        <h2 class="h2_tall_black">Проекты</h2>
        <p>Администратор: {{Auth::user()->surname}} {{Auth::user()->name}}</p>
        <div class="row_line"><a href="/admin">Проекты</a><a href="/admin-profiles">Пользователи</a></div>
        <div class="content_profile">
            <div class="profile_project">
                <a href=""><h3 class="h3_white" style="width: 300px; margin-bottom: 10px;">s</h3></a>
                <div class="row_line">
                    <button class="button_green">изменить</button>
                    <button class="button_red">удалить</button>
                </div>
                <p class="p_white">В ожидании</p>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
