@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('tasks.store')}}" method="post">
                    @csrf
                    <h1>Fill in the form</h1>
                    <label for="task-name">Task Name</label>
                    <input type="text"  id="task-name" name="name"> <br>
                    <label for="description-name">Description</label>
                    <textarea id="description-name" name="description"></textarea> <br>
                    @foreach($catalogs as $catalog)
                        <label for="catalogs">{{$catalog->name}}</label>
                    <input type="radio" id="catalogs" name="catalogs" value="{{$catalog->id}}"><br>
                    @endforeach
                    <button class="btn btn-warning" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection