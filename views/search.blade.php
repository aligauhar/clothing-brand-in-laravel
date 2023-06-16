@extends('layout')
@section('content')
    <h1>Search Here</h1>
    <form action="{{ route('search') }}" method="GET">
    <input type="text" name="keyword" placeholder="Enter item name">
    <button type="submit">Search</button>
</form>

    <br><br>
    <div class="row row-cols-1 row-cols-md-2">
        @foreach($results as $item)
            <div class="col mb-4">
                <div class="card">
                <img  style="width: 460px; height: 404px; margin-left:15%;" src="{{ asset('img/' . $item->img . '.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <h5 class="card-title">Price: {{ $item->price }}$</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop
