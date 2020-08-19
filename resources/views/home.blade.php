@extends('layouts.app')

@section('title-head')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut inventore nobis ea officia asperiores, veritatis molestias amet provident aspernatur sunt tempora. Vel qui officia, excepturi odio non consequatur quos consequuntur!</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
