@extends('main')
@section('content')
    <h1 class="mt-4">Skelbimai</h1>
    <div class="card-body">

        <div class="card mb-3">
        @foreach($ads as $ad)
            <div class="row g-0 border">
                <div class="col-md-3">
                <img src="{{asset('/storage/'.$ad->photo)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-3">
                <div class="card-body">
                    <h5 class="card-title">{{$ad->name}}</h5>
                    <p class="card-text">{{$ad->describe}}</p>
                    <p class="card-text">{{$ad->city}}</p>
                    <a href="/ad/{{$ad->id}}" >Plačiau<</a>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
