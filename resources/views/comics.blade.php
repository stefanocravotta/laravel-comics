
@extends('layouts.main')

@section('content')

<main>
    <div class="jumbotron"></div>
    <div class="container card-container">

      <button class="btn">CURRENT SERIES</button>
      
        <div class="card">
            <div class="container-img">
                <img src="comic.thumb" alt="comic.type">
            </div>
            
            <h3>comic.series</h3>
        </div>

    </div>
    <button class="btn-load">LOAD MORE</button>
    
</main>

@endsection
