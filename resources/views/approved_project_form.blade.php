<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Projet Approuvé</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto" style="max-width: 600px;">
            <h2 class="text-2xl font-bold mb-4">Fiche Projet Approuvé</h2>
            <form action="{{ route('approved-projects.store') }}" method="POST">
                @csrf
                <!-- Form fields for Approved Mobilities -->
                <!-- Similar to the fields in your HTML form -->
                <div class="form-group">
                    <label for="pic">PIC</label>
                    <input type="text" id="pic" name="pic" class="form-control">
                </div>
                <!-- Repeat for all other fields -->
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
