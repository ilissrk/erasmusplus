@extends('layout')

@section('content')
    <h1>Erasmus+ en chiffres</h1>
    <a href="{{ route('chiffres.create') }}">Ajouter une nouvelle information</a>
    <ul>
        @foreach ($erasmusInfos as $info)
            <li>{{ $info->mobilite_individus }} - {{ $info->bourses_erasmus_mundus }}</li>
            <a href="{{ route('chiffres.edit', $info->id) }}">Modifier</a>
            <form action="{{ route('chiffres.destroy', $info->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        @endforeach
    </ul>
@endsection
