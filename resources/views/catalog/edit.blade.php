@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="/update/{{$catalog->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <h1>Edit in the form</h1>
                    <label for="list-name">List Name</label>
                    <input type="text"  id="list-name" value="{{$catalog->name}}" name="name"> <br>
                    <button class="btn btn-warning" type="submit">Edit</button>
                </form>
            </div>
        </div>
    </div>
@endsection