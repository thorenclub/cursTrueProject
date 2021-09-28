@extends('core.content')

@section('title', 'Profile')
<head><meta name="csrf-token" content="{{ csrf_token() }}"></head>

    @section('content')
        <div class="content-board">
            <h2 class="h2_tall_black" style="color: rgba(255, 52, 52, 1);">Удаление проекта</h1>
            <p>Вы действительно хотите удалить Название проекта?</p>

            <div class="row_line"><a href="/profile"><button class="button_black">назад</button></a><a href=""><button class="button_red">удалить</button>
            </div>
        </div>
</div>

</div>
@endsection
