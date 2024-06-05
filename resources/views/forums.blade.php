<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
        }
        .header-top {
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo {
            max-height: 100px;
        }
        header {
            background-color: #003399;
            color: white;
            margin-top: 20px;
            padding: 10px 0;
        }
        .nav-link {
            color: white;
            margin: 0 10px;
            cursor: pointer;
        }
        .nav-link:hover {
            color: #ffcc00;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .forum-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .forum-button {
            background-color: #003399;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s;
            flex: 1;
        }
        .forum-button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function navigate(route) {
            window.location.href = route;
        }
    </script>
</head>
<body>
    <div class="header-top">
        <img src="{{ asset('images/cropped-logo-ERASMUS-fr.png') }}" alt="Erasmus+ Logo" class="logo">
        <img src="{{ asset('images/eu_funded_en.png') }}" alt="Erasmus+ Logo" class="logo">
    </div>
    <header class="flex justify-center">
        <nav>
            <span class="nav-link" onclick="navigate('{{ url('/') }}')">Accueil</span>
            <span class="nav-link" onclick="navigate('{{ url('/myInstitution') }}')">Mon Institution</span>
            <span class="nav-link" onclick="navigate('{{ url('/erasmusNumbers') }}')">Erasmus+ en chiffres</span>
            <span class="nav-link" onclick="navigate('{{ url('/icm') }}')">ICM</span>
            <span class="nav-link" onclick="navigate('{{ url('/resources') }}')">Ressources</span>
            <span class="nav-link" onclick="navigate('{{ url('/contactUs') }}')">Contactez-nous</span>
            <span class="nav-link" onclick="navigate('{{ url('/forums') }}')">Forums</span>
        </nav>
    </header>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto text-center" style="max-width: 800px;">
            <h2 class="text-2xl font-bold mb-4">Forums</h2>
            <div class="forum-buttons">
                <div class="forum-button">Bonnes Pratiques</div>
                <div class="forum-button">Difficultés</div>
            </div>
        </div>
    </div>
</body>
</html>
