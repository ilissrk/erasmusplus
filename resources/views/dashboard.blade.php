<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erasmus+ Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
        }
        header {
            background-color: white;
            color: white;
        }
        .logo {
            max-height: 100px;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn {
            background-color: #003399;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .btn-wrapper {
            width: calc(50% - 10px);
        }
    </style>
    <script>
        function navigate(route) {
            window.location.href = route;
        }
    </script>
</head>
<body>
    <header class="p-4 flex justify-between items-center">
        <img src="{{ asset('images/cropped-logo-ERASMUS-fr.png') }}" alt="Erasmus+ Logo" class="logo">
        <img src="{{ asset('images/eu_funded_en.png') }}" alt="Erasmus+ Logo" class="logo">
    </header>
    <div class="container mx-auto mt-10 text-center">
        <div class="card mx-auto" style="max-width: 800px;">
            <h1 class="text-2xl font-bold mb-5">Espace ERASMUS +</h1>
            <div class="btn-container">
                <div class="btn-wrapper"><div class="btn" onclick="navigate('{{ url('/myInstitution') }}')">Mon Institution</div></div>
                <div class="btn-wrapper"><div class="btn" onclick="navigate('{{ url('/erasmusNumbers') }}')">Erasmus+ en chiffres</div></div>
                <div class="btn-wrapper"><div class="btn" onclick="navigate('{{ url('/icm') }}')">ICM</div></div>
                <div class="btn-wrapper"><div class="btn" onclick="navigate('{{ url('/resources') }}')">Ressources</div></div>
                <div class="btn-wrapper"><div class="btn" onclick="navigate('{{ url('/contactUs') }}')">Contactez-nous</div></div>
                <div class="btn-wrapper"><div class="btn" onclick="navigate('{{ url('/forums') }}')">Forums</div></div>
            </div>
            <div id="content" class="mt-5">
                <h2 class="text-2xl font-bold mb-4">Bienvenue sur votre espace ERASMUS +</h2>
                <p>Veuillez séléctionner une section.</p>
            </div>
        </div>
    </div>
</body>
</html>
