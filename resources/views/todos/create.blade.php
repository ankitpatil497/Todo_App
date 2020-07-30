@extends('layouts.app')

@section('content')

    <h1 class="text-center my-5">Create Todos</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card card-header">
                    Craete new Todos
                </div>
                <div class="card card-body">
                    @if ($errors->all())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{$error}}
                                    </li>    
                                @endforeach
                            </ul>
                        </div>
                        
                    @endif
                    <form action="store" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" id="">
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" placeholder="Description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Create Todos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection