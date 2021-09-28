@extends('core.content')

@section('title', 'Profile')

    @section('content')
        <div class="content-board">
            <h2 class="h2_tall_black">Профиль</h1>
            <p>Привет, Зяблов Глеб</p>
            <button class="button_black">Создать проект</button>
            <div class="content_profile">
                <div class="profile_project">
                    <a href=""><h3 class="h3_white" style="width: 300px; margin-bottom: 10px;">Дизайн кофейни "Albert Coffee"</h2></a>
                    <div class="row_line"><button class="button_green">изменить</button><button class="button_red">удалить</button></div>
                    <p class="p_white">В ожидании</p>
                </div>
            </div>
        </div>
</div>

</div>
@endsection
