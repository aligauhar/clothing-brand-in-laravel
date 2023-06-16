@extends('layout')
@section('content')
    <h1>Products here</h1>
    <br><br>
    <div class="row row-cols-1 row-cols-md-2">
        @foreach($data as $item)
            <div class="col mb-4">
                <div class="card">
                <img  style="width: 460px; height: 404px; margin-left:15%;" src="{{ asset('img/' . $item->img . '.PNG') }}" class="card-img-top" alt="...">
                 <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->discription}}</p>
                        <h5 class="card-title">Price: {{$item->price}}$</h5>
                        @if(session('role') == 'Admin')
                            <a href="/delete/{{$item->id}}"> <i class="fa fa-trash">delete</i> </a>
                            <a href="/edit/{{$item->id}}"> <i class="fa fa-edit">edit</i> </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
