@extends('template')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <header class="card-header p-3">
                <p class="card-header-title">Création d'un film</p>
            </header>
            <div class="card-content p-3">
                <div class="content">
                    <form action="{{ route('films.store') }}" method="POST">
                        @csrf
                        <div class="field">
                            <label class="label">Titre</label>
                            <div class="form-group">
                                <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title') }}" placeholder="Titre du film">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Année de diffusion</label>
                            <div class="form-group">
                                <input class="form-control @error('year') is-invalid @enderror" type="number" name="year" value="{{ old('year') }}" min="1950" max="{{ date('Y') }}">
                                @error('year')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Choisissez une catégorie</label>
                            <div class="form-group">
                                <select class="form-control" name="cats[]" multiple>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ in_array($category->id, old('cats') ?: []) ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Description</label>
                            <div class="form-group">
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description du film">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="field">
                            <div class="form-group">
                            <button class="btn btn-link">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection