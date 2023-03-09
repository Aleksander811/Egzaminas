@extends('main')
@section('content')
    <h1 class="mt-4">Pridėti skelbimą</h1>
    @include('_partials.errors')
    <form action="/storeAd" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group m-1">
            <input type="text" class="form-control" name="name" placeholder="Skelbimo pavadinimas">
        </div>
        <div class="form-group m-1">
            <input type="text" class="form-control" name="describe" placeholder="Skelbimo aprašymas">
        </div>
        <div class="form-group m-1">
            <input type="text" name="city" class="form-control" placeholder="Miestas">
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



