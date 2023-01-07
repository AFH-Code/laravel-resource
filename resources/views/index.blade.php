@extends('template')
@section('content')
    @if(session()->has('info'))
        <div class="alert alert-success mt-2">
            {{ session('info') }}
        </div>
    @endif

    <div class="container mt-4">
        <div class="card">
            <header class="card-header">
                <a class="btn btn-info float-right" href="{{ route('films.create') }}">Créer un film</a>
                <p class="card-header-title">Films</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Titre</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($films as $film)
                                <tr>
                                    <td>{{ $film->id }}</td>
                                    <td><strong>{{ $film->title }}</strong></td>
                                    <td><a class="btn btn-primary" href="{{ route('films.show', $film->id) }}">Voir</a></td>
                                    <td><a class="btn btn-warning" href="{{ route('films.edit', $film->id) }}">Modifier</a></td>
                                    <td>
                                        <form action="{{ route('films.destroy', $film->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="card-footer">
                {{ $films->links() }}
            </footer>
        </div>
    </div>
@endsection