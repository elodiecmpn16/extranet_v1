@extends('home')
@section('content')
    <div class="row" style="border: 1px solid black">
        {{--<img class="card-img-top" src="{{asset('img/avatar1.png')}}" alt="Card image cap">--}}
        <h5 class="text-center col-lg-12" style=" margin: 20px">{{$user->name}}</h5>
        <div class="col-lg-6 detail_perso">
            <h6>information personnelle</h6>
            <p>Log : {{$user->username}}</p>
            <p>Groupe : {{$user->cltgroupe}}</p>
            <p>Adresse : {{$user->adr1}}</p>
            <p>Complément adresse : {{$user->adr2}}</p>
            <p>Code postal : {{$user->cp}}</p>
            <p>Ville : {{$user->ville}}</p>
            <p>Telephone : {{$user->tel}}</p>
        </div>
        <div class="col-lg-6 detail_ets">
            <h6>information entreprise</h6>
            <p>Siret : {{$user->siret}}</p>
            <p>Type : {{$user->type}}</p>
            <p>Page défaut : {{$user->pagedefaut}}</p>
            <p>Site : {{$user->site}}</p>
            <p>Communauté : {{$user->communaute}}</p>
            <p>Localité : {{$user->localite}}</p>
        </div>
        <div class="col-lg-12">
            <p class="col-lg-6">
                <small class="text-muted">Créé(e) le {{$user->created_at}}</small>
                <small class="text-muted">Modifié(e) le {{$user->updated_at}}</small>
            </p>
        </div>
        <td><a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-outline-warning btn-block">Edit</a>
        </td>
    </div>
    <a href="{{ URL::previous() }}" class="btn btn-outline-info retour">retour</a>
@endsection