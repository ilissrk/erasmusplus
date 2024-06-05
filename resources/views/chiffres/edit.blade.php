@extends('layout')

@section('content')
    <h1>Modifier l'information</h1>
    <form action="{{ route('erasmus_infos.update', $erasmusInfo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="mobilite_individus">Mobilité des individus:</label>
        <input type="text" id="mobilite_individus" name="mobilite_individus" value="{{ $erasmusInfo->mobilite_individus }}">

        <label for="bourses_erasmus_mundus">Bourses Erasmus Mundus:</label>
        <input type="text" id="bourses_erasmus_mundus" name="bourses_erasmus_mundus" value="{{ $erasmusInfo->bourses_erasmus_mundus }}">

        <label for="mobilite_jeunesse">Mobilité jeunesse:</label>
        <input type="text" id="mobilite_jeunesse" name="mobilite_jeunesse" value="{{ $erasmusInfo->mobilite_jeunesse }}">

        <label for="ees_ongs_partenaire">EES et ONGs partenaires:</label>
        <input type="text" id="ees_ongs_partenaire" name="ees_ongs_partenaire" value="{{ $erasmusInfo->ees_ongs_partenaire }}">

        <label for="projets_renforcement_capacites">Projets de renforcement de capacités:</label>
        <input type="text" id="projets_renforcement_capacites" name="projets_renforcement_capacites" value="{{ $erasmusInfo->projets_renforcement_capacites }}">

        <label for="activites_jean_monnet">Activités Jean Monnet:</label>
        <input type="text" id="activites_jean_monnet" name="activites_jean_monnet" value="{{ $erasmusInfo->activites_jean_monnet }}">

        <button type="submit">Mettre à jour</button>
    </form>
@endsection
