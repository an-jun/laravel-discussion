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
        <div class="row">
            <div class="col-md-9" role="main">
                @foreach($discussions as $d)
                    <div class="media">
                        <a class="media-left" href="/discussions/{{$d->id}}">
                            <img class="media-object rounded-circle" src="{{$d->user->avatar}}" width="64" height="64">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $d->title }}</h4>
                            {!! $d->user->name !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
   
  </main>
@stop