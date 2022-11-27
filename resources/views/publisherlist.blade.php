@extends('template')

@section('title', 'Publisher List')

@section('containertitle', 'Publisher List')

@section('content')

    <div class="row">
        @foreach ($publisher as $publikasi)
        <div class="col-6 p-2">
            <div class="card bg-light">
                <img src="{{asset($publikasi->image)}}" class="card-img-top img-fluid" style="height:5cm width:5cm">
            <div class="card-body">
                <h1 class="card-title">
                    {{$publikasi->name}}
                </h1>

                <p class="card-text">
                    Address:
                    <br>
                    {{$publikasi->address}}
                </p>
                <a href="/publisherlist/{{$publikasi->id}}" class="btn btn-warning" title="Book Detail">Book Detail</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
