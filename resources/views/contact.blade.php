@extends('layouts.app')

@section('title-head')
  Страница контактов
@endsection

@section('content')
  <h1>Страница контактов</h1>
  <form action="{{ route('contact-form') }}" method="post">
    @csrf

    <div class="form-group">
      <label for="name">Введите имя</label>
      <input type="text" name="name" placeholder="Иван" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" name="email" placeholder="mail@example.com" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="name">Тема сообщения</label>
      <input type="text" name="subject" placeholder="Subject" id="subject" class="form-control">
    </div>

    <div class="form-group">
      <label for="message">Сообщение</label>
      <textarea name="message" id="message" class="form-control" placeholder="Text message"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
  </form>
@endsection


