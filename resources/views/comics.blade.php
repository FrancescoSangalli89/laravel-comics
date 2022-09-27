@extends('layout.app')

@section('page-title', 'Comics')

@section('content')
    <span class="current-series">
        <h3>CURRENT SERIES</h3>
    </span>
    <div class="container products-list">
        @foreach ($comics as $comic)
        <a href="#" class="product-card">
            <img src="{{$comic['thumb']}}" />
            <h3>{{$comic['series']}}</h3>
        </a>
        @endforeach
    </div>
    <button>LOAD MORE</button>
@endsection