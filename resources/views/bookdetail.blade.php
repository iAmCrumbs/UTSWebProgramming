@extends('template')

@section('title', 'Book Detail')

@section('containertitle', 'Book Detail')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card bg-light">
                <img src="{{asset($books->image)}}" class="w-25">
            </div>
            <div>
                <p>Title: {{$books->title}}</p>
                <p>Author: {{$books->author}}</p>
                <p>Publisher: {{$publishers->name}}</p>
                <p>Year: {{$books->year}}</p>
                <p>Synopsis: {{$books->synopsis}}</p>
            </div>
        </div>
    </div>

@endsection
