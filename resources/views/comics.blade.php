
@extends('layouts.main')

@section('content')

<main>
    <div class="jumbotron"></div>
    <div class="container card-container">

      <button class="btn">CURRENT SERIES</button>
        
        @foreach ($comics as $comic)
            
        <div class="card">
            <div class="container-img">
                <img src="{{ $comic->image }}" alt="{{ $comic->type }}">
            </div>
            
            <h3>{{ $comic->title }}</h3>
        </div>

        @endforeach

    </div>
    <button class="btn-load">LOAD MORE</button>
    
</main>

@endsection
