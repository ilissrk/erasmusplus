<!-- resources/views/institutions/create-step1.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Institution Step 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto" style="max-width: 800px;">
            <h2 class="text-2xl font-bold mb-4">Mon établissement - Étape 1</h2>
            <form method="POST" action="{{ route('institutions.create.step1.post') }}">
                @csrf
                <div class="form-group">
                    <label for="institutionName">Nom de l'institution</label>
                    <input type="text" id="institutionName" name="institutionName" class="form-control" value="{{ old('institutionName', session('institution.institutionName')) }}">
                </div>
                <div class="form-group">
                    <label for="status">Statut</label>
                    <select id="status" name="status" class="form-control">
                        <option value="public" {{ old('status', session('institution.status')) == 'public' ? 'selected' : '' }}>Public</option>
                        <option value="private" {{ old('status', session('institution.status')) == 'private' ? 'selected' : '' }}>Private</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="city">Ville</label>
                    <select id="city" name="city" class="form-control">
                        <option value="city1" {{ old('city', session('institution.city')) == 'city1' ? 'selected' : '' }}>City 1</option>
                        <option value="city2" {{ old('city', session('institution.city')) == 'city2' ? 'selected' : '' }}>City 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="region">Région</label>
                    <select id="region" name="region" class="form-control">
                        <option value="region1" {{ old('region', session('institution.region')) == 'region1' ? 'selected' : '' }}>Region 1</option>
                        <option value="region2" {{ old('region', session('institution.region')) == 'region2' ? 'selected' : '' }}>Region 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="postalAddress">Adresse postale</label>
                    <input type="text" id="postalAddress" name="postalAddress" class="form-control" value="{{ old('postalAddress', session('institution.postalAddress')) }}">
                </div>
                <div class="form-group">
                    <label for="website">Site web</label>
                    <input type="url" id="website" name="website" class="form-control" value="{{ old('website', session('institution.website')) }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
