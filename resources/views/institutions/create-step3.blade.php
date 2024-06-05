<!-- resources/views/institutions/create-step3.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Institution Step 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto" style="max-width: 800px;">
            <h2 class="text-2xl font-bold mb-4">Mon établissement - Étape 3</h2>
            <form method="POST" action="{{ route('institutions.create.step3.post') }}">
                @csrf
                <h3 class="text-xl font-bold mt-4">Bureau des relations internationales au niveau de la présidence</h3>
                <div id="internationalOfficeContainer">
                    <div class="form-group">
                        <label for="internationalOffice[0][name]">Nom</label>
                        <input type="text" id="internationalOffice[0][name]" name="internationalOffice[0][name]" class="form-control" value="{{ old('internationalOffice[0][name]', session('institution.internationalOffice.0.name')) }}">
                    </div>
                    <div class="form-group">
                        <label for="internationalOffice[0][phone]">Téléphone</label>
                        <input type="tel" id="internationalOffice[0][phone]" name="internationalOffice[0][phone]" class="form-control" value="{{ old('internationalOffice[0][phone]', session('institution.internationalOffice.0.phone')) }}">
                    </div>
                    <div class="form-group">
                        <label for="internationalOffice[0][email]">Email</label>
                        <input type="email" id="internationalOffice[0][email]" name="internationalOffice[0][email]" class="form-control" value="{{ old('internationalOffice[0][email]', session('institution.internationalOffice.0.email')) }}">
                    </div>
                </div>
                <h3 class="text-xl font-bold mt-4">Contact ICM</h3>
                <div id="icmContactContainer">
                    <div class="form-group">
                        <label for="icmContact[0][name]">Nom</label>
                        <input type="text" id="icmContact[0][name]" name="icmContact[0][name]" class="form-control" value="{{ old('icmContact[0][name]', session('institution.icmContact.0.name')) }}">
                    </div>
                    <div class="form-group">
                        <label for="icmContact[0][department]">Département</label>
                        <input type="text" id="icmContact[0][department]" name="icmContact[0][department]" class="form-control" value="{{ old('icmContact[0][department]', session('institution.icmContact.0.department')) }}">
                    </div>
                    <div class="form-group">
                        <label for="icmContact[0][institution]">Établissement</label>
                        <input type="text" id="icmContact[0][institution]" name="icmContact[0][institution]" class="form-control" value="{{ old('icmContact[0][institution]', session('institution.icmContact.0.institution')) }}">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
