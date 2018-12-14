@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Task Name - {{$task->name}}</h1>
                <h1>Task Description - {{$task->description}}</h1>
                <h1>Created - {{substr($task->created_at, 11)}}</h1>
            </div>
        </div>
    </div>
@endsection