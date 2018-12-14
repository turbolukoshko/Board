@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{$catalog->name}}</h1>
                <ul>
                    @foreach($tasks as $task)
                        <li class="list-item">
                            <a href="#">{{$task->name}}</a>
                            <a class="btn btn-warning" href="/catalogs/tasks/{{$task->id}}">Show</a>
                            <a class="btn btn-info" href="/catalogs/tasks/{{$task->id}}/edit">Edit</a>
                            <a class="btn btn-danger" href="/delete/tasks/{{$task->id}}">Delete</a>
                        </li>
                        <br>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection