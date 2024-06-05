<!-- resources/views/realized_mobility/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realized Mobilities Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto" style="max-width: 600px;">
            <h2 class="text-2xl font-bold mb-4">Fiche projet Réalisé</h2>
            @if(session('success'))
                <div class="bg-green-500 text-white p-4 mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('realized_mobility.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="pic">Pic</label>
                    <input type="text" id="pic" name="pic">
                </div>
                <div class="form-group">
                    <label for="moroccanPartner">Moroccan partner</label>
                    <input type="text" id="moroccanPartner" name="moroccanPartner">
                </div>
                <!-- Répétez ceci pour tous les champs du formulaire -->
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
