@extends('layouts/_index')

@section('content')
<section class="jumbotron text-center">
    <div class="container mt-5">
        <h1 class="jumbotron-heading">CONTACT DE LOCATION</h1>
        @if (Session::has('success'))
        <p class="lead text-muted mb-0 alert-success text-white">{{Session::get('success')}}</p>
  
        @endif
        @if (Session::has('info'))
        <p class="lead text-muted mb-0 alert-success text-white">{{Session::get('info')}}</p>
  
        @endif
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Acceuil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i>Contactez-nous.
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('louer')}}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Votre nom</label>
                            <input type="text" name="nom" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Entrer votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse email</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre email" required>
                            <small id="emailHelp" class="form-text text-muted">Nous partagerons votre email</small>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse Téléphonique</label>
                            <input type="number" name="num" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Votre numero de téléphone" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="email">date de loacation  et de retour</label>
                            <input type="text" name="date_locations" class="form-control" id="" aria-describedby="" placeholder="Ex: 12/12/12 à 12/12/13" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="message">Message spécifique(maximumun 50 mots)</label>
                            <textarea name="message" class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto mt-5">
                        <button type="submit" class="btn btn-primary text-right">Soumettre <i class="fa fa-send"></i></button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
                <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i>Information voiture</div>
                <div class="card-body">
                    <p>{{$specifiqueCarDetailOnlyOne[0]->voiture_nom}}</p>
                    <p>Couleur: grise</p>
                    <p>Cout: 250$</p>
                    <p>Email : email@example.com</p>
                    <p>Tel. +229 64745149</p>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection