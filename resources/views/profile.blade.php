<?php
/** @var \App\Project $obProject */
use \Illuminate\Support\Facades\Auth;
?>
@extends('core.content')

@section('title', 'Профиль')

@section('content')
    <div class="content-board">
        <h2 class="h2_tall_black">Профиль</h2>
        <p>Привет, {{Auth::user()->surname}} {{Auth::user()->name}}</p>
        <button onclick="window.location='{{route('create-project')}}'" class="button_black">Создать проект</button>
        <div class="content_profile">
        <?php foreach ($obProject as $obItem): ?>
            <div class="profile_project">
                <a href=""><h3 class="h3_white" style="width: 300px; margin-bottom: 10px;">{{$obItem->name}}</h3></a>
                <div class="row_line">
                    <button class="button_green">изменить</button>
                    <button class="button_red">удалить</button>
                </div>
                <p class="p_white">В ожидании</p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    </div>

    </div>
@endsection
