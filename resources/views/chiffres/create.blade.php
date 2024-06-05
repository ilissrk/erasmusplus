@extends('layout')

@section('content')
    <div class="container">
        <h1>Create Mob</h1>
        <form action="{{ route('chiffres.store') }}" method="POST">
            @csrf
        <label for="mobilite_individus">Mobilité des individus:</label>
        <input type="text" id="mobilite_individus" name="mobilite_individus">

        <label for="bourses_erasmus_mundus">Bourses Erasmus Mundus:</label>
        <input type="text" id="bourses_erasmus_mundus" name="bourses_erasmus_mundus">

        <label for="mobilite_jeunesse">Mobilité jeunesse:</label>
        <input type="text" id="mobilite_jeunesse" name="mobilite_jeunesse">

        <label for="ees_ongs_partenaire">EES et ONGs partenaires:</label>
        <input type="text" id="ees_ongs_partenaire" name="ees_ongs_partenaire">

        <label for="projets_renforcement_capacites">Projets de renforcement de capacités:</label>
        <input type="text" id="projets_renforcement_capacites" name="projets_renforcement_capacites">

        <label for="activites_jean_monnet">Activités Jean Monnet:</label>
        <input type="text" id="activites_jean_monnet" name="activites_jean_monnet">
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection















