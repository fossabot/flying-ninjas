@extends('layout.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="row">
        <div class="col s12">
            <h1>News</h1>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col s6">
                <div class="card large">
                    <a href="{{ url('news/'.$post->id) }}">
                        <div class="card-image">
                            <img src="{{ asset('img/sample-1.jpg') }}">

                            <span class="card-title">{{ $post->title }}</span>

                        </div>
                    </a>
                    <div class="card-content">
                        <p>{{ str_limit(strip_tags($post->body), $limit = 350, $end = ' [&hellip;]') }}</p>

                    </div>
                    <a href="{{ url('news/'.$post->id) }}">
                        <div class="card-action blue darken-3">
                            <span class="grey-text text-lighten-3">Read More</span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection