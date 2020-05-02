@extends('layouts.mainlayout')

@section('content')
    <div class="container mt-5 pt-5">
    <h1>Edit Task</h1>
    <hr>
    <form action="{{ url('tasks', [$task->id]) }}" method="post">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Task title</label>
            <input type="text" value="{{ $task->title }}" class="form-control" id="taskTitle" name="title">
        </div>
        <div class="form-group">
            <label for="description">Task Description</label>
            <input type="text" value="{{ $task->description }}" class="form-control" id="taskDescription" name="description">
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
    </div>    

@endsection