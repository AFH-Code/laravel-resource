@extends('template')
 
@section('contenu')
    <div class="container mt-2">
    <form action="{{ url('users') }}" method="POST">
        @csrf
        <label for="nom">Entrez votre nom : </label>
        <div class="mb-2">
        <input type="text" name="nom" id="nom">
        </div>
        <input type="submit" value="Envoyer !">
    </form>
    </div>
@endsection
