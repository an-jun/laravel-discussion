@extends('app')
@section('content')

  <main role="main">
      <div class="container">
          <div class="jumbotron">
              <h1>Navbar example</h1>
              <p class="lead">This example is a quick exercise </p>
            </div>
      </div>

    <div class="container">
        <!-- Example row of columns -->
        @foreach ($discussions as $d )
        <div class="row">
          <div class="col-md-9">
            <img class="media-object img_circle" alt="64x64" src="{{$d->uesr->avatar}}">
            <h2> {{ $d->title }}</h2>
            <p> {!! $d->body !!}</p>
          </div>
        </div>
        @endforeach
        

      </div>
   
  </main>
@stop