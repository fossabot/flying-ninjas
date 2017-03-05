@extends('layout.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <div class="row">
        <article role="article">
            <div class="col s12">
                <h1 role="heading">{{ $posts->title }}</h1>
            </div>
            <div class="col s12">
                {!! html_entity_decode($posts->body) !!}
            </div>
        </article>
    </div>

@endsection