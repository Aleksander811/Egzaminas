@extends('main')
@section('content')
    <h1 class="mt-4">Redaguoti skelbimo turinį</h1>
    @include('_partials.errors')
    <form action="/update/{{ $ad->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" class="form-control" name="name" value="{{$ad->name}}">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="describe" value="{{$ad->describe}}">
        </div>
        <div class="form-group m-1">
            <input type="text" name="city" class="form-control" value="{{$ad->city}}">
        </div>

        <div class="div-group m-1">
            <label>Nuotrauka</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <div class="form-group m-1">
            <button type="submit" class="btn btn-primary">Saugoti</button>
        </div>
    </form>
@endsection



