@extends('template')

@section('title', 'Home')

@section('containertitle', 'Book List')

@section('content')
    <div class="row">
        @foreach ($books as $buku)
        <div class="col-6">
            <div class="card bg-light">
                <img src="{{asset($buku->image)}}" class="img-fluid card-img-top" style="height: 5cm width 5cm">
                <div class="card-body">
                    <h2 class="card-title">
                        {{$buku->title}}
                    </h2>
                    <br>
                    <p class="card-text">BY {{$buku->author}}</p>
                    <a href="/bookdetail/{{$buku->id}}" title="BookDetail" class="btn btn-warning">Detail</a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
@endsection
