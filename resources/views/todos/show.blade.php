@extends('layouts.app')


@section('content')

<h1 class="text-center my-5"> {{$todos->name}}</h1>
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card card-default">
            <div class="card-header">
                Details
            </div>
            <div class="card-body">
                {{$todos->description}} 
            </div>
        </div>
        <a href="{{$todos->id}}/edit" class="btn btn-info btn-sm my-5">Edit</a>
        <a href="{{$todos->id}}/delete" class="btn btn-danger btn-sm my-5">Delete</a>

    </div>
</div>
    
@endsection