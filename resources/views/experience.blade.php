@extends('layout')

@section('title')

    Experience

@endsection

@section('content')

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>

@endsection