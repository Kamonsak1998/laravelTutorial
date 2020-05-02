@extends('layouts.mainlayout')

@section('content')
    <div class="container pt-5 mt-5">
        <h1>Showing Task {{ $task->title }}</h1>
        <div class="jumbotron text-center">
            <p>
            <strong>Task Title: </strong> {{ $task->title }}
            <br>
            <strong>Task Description: </strong> {{ $task->description }}
        </p>
        </div>
    </div>
@endsection