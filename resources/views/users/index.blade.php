@extends('home')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div><br/>
    @endif
    <h2>Liste des comptes utilisateurs</h2>
    <div class="row">
        {{ Form::open(['method'=>'GET','url'=>'users','class'=>'col-lg-12','role'=>'recherche']) }}
        {{ csrf_field() }}
            <div class="input-group input-group-lg col-lg-12">
                <input type="text" class="form-control" value="{{$recherche}}" name="recherche"
                       placeholder="Faites une recherche par nom ou log">
            </div>
            <div class="input-group col-lg-12" style="margin: 20px 0px 40px 0px ">
                {{ Form::submit('Recherche', ['class'=>'btn btn-light btn-block'])}}
            </div>
            {!! Form::close() !!}
        <table class=" table table-striped">
            <thead>
            <tr>
                <td>Nom</td>
                <td>Log utilisateur</td>
                <td>groupe</td>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->cltgroupe}}</td>
                    <td><a href="{{action('UserController@show', $user['id'])}}" class="btn btn-outline-info">Voir</a>
                    </td>
                    <td>
                    <td><a href="{{action('UserController@edit', $user['id'])}}" class="btn btn-outline-warning">Modifier</a></td>
                    <td>
                        <form action="{{action('UserController@destroy', $user['id'])}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-outline-danger" onclick="return confirm('Etes-vous sur ?')" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection