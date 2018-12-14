@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/update/tasks/{{$task->id}}" method="post">
                    @csrf
                    @method('put')
                    <h1>Fill in the form</h1>
                    <label for="task-name">Task Name</label>
                    <input type="text"  id="task-name" name="name" value="{{$task->name}}"> <br>
                    <label for="description-name">Description</label>
                    <textarea id="description-name" name="description">{{$task->description}}</textarea> <br>
                    <br>
                    <button class="btn btn-warning" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection