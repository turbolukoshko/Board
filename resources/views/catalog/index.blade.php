@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1>Hello! There are your lists:</h1>
                <div>
                    <a class="btn btn-success" href="{{route('catalogs.create')}}">Create list</a>
                    <a class="btn btn-success" href="{{route('tasks.create')}}">Create task</a>
                </div>
                <br>
                <ol>
                    @foreach($catalogs as $catalog)
                    <li class="list-item">
                        <a href="#">{{$catalog->name}}</a>
                        <a class="btn btn-warning" href="/catalogs/{{$catalog->id}}">Show</a>
                        <a class="btn btn-info" href="/catalogs/{{$catalog->id}}/edit">Edit</a>
                        <a class="btn btn-danger" href="/delete/{{$catalog->id}}">Delete</a>
                    </li>
                        <br>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection