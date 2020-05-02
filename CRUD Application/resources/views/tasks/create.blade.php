@extends('layouts.mainlayout')

@section('content')

<div class="container">
    <h1 class="mt-5 pt-5">Add New Task</h1>
    <hr>
    <form action="/tasks" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Task title</label>
        <input type="text" class="form-control" id="taskTitle" name="title">
    </div>
    <div class="form-group">
        <label for="description">Task description</label>
        <input type="text" class="form-control" id="teskDescription" name="description">
    </div>
    @if($errors->any())
    <div class="aler alert-danger">
        <ul>
            @foreach ($error->all() as $error)
            <li>{{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
@endsection