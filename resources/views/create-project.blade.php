<?php /** @var object $obProjectType */ ?>
@extends('core.content')
@section('title') Добавить новый проект @endsection
@section('content')
    <h2 class="h2_tall_black">Создание проекта</h2>
    <br>
    <form action="{{route('create-project')}}" method="POST">
        @csrf
         <div class="input-div">
                    <label class="input-up" for="login">Название проекта</label>
                    <input class="input-default" type="text" name="name" placeholder="Название">
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="input-div">
                    <label class="input-up" for="login">Описание</label>
                    <textarea class="input-default" name="description" cols="5" rows="10" placeholder="Описание проекта"></textarea>
        </div>
    
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <select name="type_id">
            <?php foreach($obProjectType as $obItem): ?>
            <option value="{{$obItem->type}}">{{$obItem->type}}</option>
            <?php endforeach; ?>
        </select>
        @error('type_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <label for="urgency" style="user-select: none;">Нужно срочно сделать?
            <input id="urgency" type="checkbox" name="urgency">
        </label>
        @error('urgency')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="button button_black">Отправить</button>
    </form>

@endsection
