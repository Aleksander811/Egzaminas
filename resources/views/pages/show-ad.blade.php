@extends('main')
@section('content')
    <div class="card mt-5">
        <h1 class="mt-4">{{$ad->name}}</h1>
        <img src="{{asset('/storage/'.$ad->photo)}}" alt="">
        <h3>Skelbimo informacija</h3>
        <ul>
            <li>Skelbimo aprašymas: {{$ad->describe}}</li>
            <li>Miestas: {{$ad->city}}</li>
        </ul>
        <h4>Veiksmai:</h4>
        <ul>
            <li><a href="/ad/edit/{{$ad->id}}">Redaguoti</a></li>
            <li><a href="/ad/delete/{{$ad->id}}">Šalinti</a></li>
        </ul>
    </div>

@endsection
