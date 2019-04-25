@extends('layouts.app')

@section('title_shmaitl', $title)

@section('sidebar')
    @parent

    <h2>Топ статей</h2>
    <p>Статья 1</p>
    <p>Статья 2</p>
    <p>Статья 3</p>
    <br>
    <h2>Топ коммеентарий</h2>
    <p>Комментарий 1</p>
    <p>Комментарий 2</p>
    <p>Комментарий 3</p>
@endsection

@section('content')

    @component('alert')
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent

@endsection

