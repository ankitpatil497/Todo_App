@extends('layouts.app')


@section('content')
<h1 class="text-center my-5">Todos Page</h1>

<div class="row justify-control-center">
    <div class="col-md-8 offset-md-2">
         <div class="card-header">
             Todos
         </div>
         <div class="card-body">
                 <ul class="list-group">
                     @foreach ($todos as $todo)
                         <li class="list-group-item">
                             {{$todo->name}}
                             @if (!$todo->completed)
                                <a href="todos/{{ $todo->id}}/complete" class="btn btn-warning btn-sm float-right ">Complete</a>                             

                             @endif
                             <a href="todos/{{ $todo->id}}" class="btn btn-primary btn-sm float-right mr-2">view</a>

                       </li>

                         {{-- <li>{{$todo->description}}</li>         --}}
                     @endforeach

                 </ul>
         </div>
    </div>
</div>
@endsection