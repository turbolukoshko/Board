@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('catalogs.store')}}" method="post">
                    @csrf
                    <h1>Fill in the form</h1>
                    <label for="list-name">List Name</label>
                    <input type="text"  id="list-name" name="name"> <br>
                    <button class="btn btn-warning" type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection