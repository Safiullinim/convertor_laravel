@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
<h1>Контакты</h1>


<form action="{{route('contact-form')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Введите имя</label>
        <input type="text" name="name" placeholder="Введите текст" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Еmail</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Тема сообщения</label>
        <input type="text" name="subject" placeholder="Введите тему" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Сообщение</label>
        <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection