@extends('home')
@section('content')
    <h2 class="text-center">Modifier Utilisateur {{$user->name}}</h2>
    <h5>Information personnel</h5>
    <form method="post" class="col-lg-12" action="{{action('UserController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group col-md-4">
                <label for="username">username:</label>
                <input type="text" class="form-control" name="username" value="{{$user->username}}">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{$user->email}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="adr1">Adresse</label>
                <input type="text" class="form-control" name="adr1" value="{{$user->adr1}}">
            </div>
            <div class="form-group col-md-4">
                <label for="adr2">Complément Adresse</label>
                <input type="text" class="form-control" name="adr2" value="{{$user->adr2}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cp">Code postal</label>
                <input type="text" class="form-control" name="cp" value="{{$user->cp}}">
            </div>
            <div class="form-group col-md-4">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" name="ville" value="{{$user->ville}}">
            </div>
            <div class="form-group col-md-4">
                <label for="tel">Telephone</label>
                <input type="text" class="form-control" name="tel" value="{{$user->tel}}">
            </div>
        </div>
        <h5>Information entreprise</h5>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="siret">Siret</label>
                <input type="text" class="form-control" name="siret" value="{{$user->siret}}">
            </div>
            <div class="form-group col-md-4">
                <label for="rex">Rex</label>
                <input type="text" class="form-control" name="rex" value="{{$user->rex}}">
            </div>
            <div class="form-group col-md-4">
                <label for="groupe">Groupe</label>
                <input type="text" class="form-control" name="groupe" value="{{$user->groupe}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection