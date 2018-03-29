@extends('app')
@section('content')

    <main role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9" role="main">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img class="media-object rounded-circle" src="{{$d->user->avatar}}" width="64" height="64">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $d->title }}</h4>
                            {!! $d->user->name !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9" role="main">

                </div>
            </div>
        </div>

    </main>
@stop