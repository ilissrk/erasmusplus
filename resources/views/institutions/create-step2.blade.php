<!-- resources/views/institutions/create-step2.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Institution Step 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto" style="max-width: 800px;">
            <h2 class="text-2xl font-bold mb-4">Mon établissement - Étape 2</h2>
            <form method="POST" action="{{ route('institutions.create.step2.post') }}">
                @csrf
                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="url" id="facebook" name="facebook" class="form-control" value="{{ old('facebook', session('institution.facebook')) }}">
                </div>
                <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="url" id="twitter" name="twitter" class="form-control" value="{{ old('twitter', session('institution.twitter')) }}">
                </div>
                <div class="form-group">
                    <label for="legalRepresentative">Représentant légal</label>
                    <input type="text" id="legalRepresentative" name="legalRepresentative" class="form-control" value="{{ old('legalRepresentative', session('institution.legalRepresentative')) }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
