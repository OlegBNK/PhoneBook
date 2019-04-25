@extends('layouts.app')

@section('title_shmaitl', $title)

@section('sidebar')
    @parent

    <p>Телефон: +380501234567</p>
    <p>Skype: ...</p>
    <p>Telegram: ...</p>
    <br>
@endsection

@section('content')

    @component('alert')
        <strong>Whoops!</strong> Something went wrong!
    @endcomponent

    <p>This is my body content.</p>
@endsection