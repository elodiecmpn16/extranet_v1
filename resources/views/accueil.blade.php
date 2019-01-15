@extends('home')

@section('content')

    <main role="main">
        <div class="jumbotron">
                <h1 class="display-3">Bienvenue sur l'extranet Tremblaye</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                    jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                    unique.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>

        <div class="container">
            <div class="row accueilMetiers">
                <div class="col-md-4 transport">
                    <h2>Transport</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                        mollis euismod. Donec sed odio dui. </p>
                </div>
                <div class="col-md-4 logistique">
                    <h2>Logistique</h2>
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                        mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                        mollis euismod. Donec sed odio dui. </p>
                </div>
                <div class="col-md-4 location">
                    <h2>Location</h2>
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                        porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
                        ut fermentum massa justo sit amet risus.</p>
                </div>
            </div>
        </div>
    </main>

@endsection