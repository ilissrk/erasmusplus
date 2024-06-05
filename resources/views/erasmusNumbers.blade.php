<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erasmus+ en chiffres</title>
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
            <span class="nav-link" onclick="navigate('{{ url('/') }}')">Home</span>
            <span class="nav-link" onclick="navigate('{{ url('/myInstitution') }}')">Mon Institution</span>
            <span class="nav-link" onclick="navigate('{{ url('/erasmusNumbers') }}')">Erasmus+ en chiffres</span>
            <span class="nav-link" onclick="navigate('{{ url('/icm') }}')">ICM</span>
            <span class="nav-link" onclick="navigate('{{ url('/resources') }}')">Ressources</span>
            <span class="nav-link" onclick="navigate('{{ url('/contactUs') }}')">Contactez-nous</span>
            <span class="nav-link" onclick="navigate('{{ url('/forums') }}')">Forums</span>
        </nav>
    </header>
    <div class="container mx-auto mt-10 text-center">
        <div class="card mx-auto" style="max-width: 800px;">
            <h2 class="text-2xl font-bold mb-4">Erasmus+ en chiffres</h2>
            <p>Voici quelques statistiques clés sur le programme Erasmus+ au Maroc:</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">Mobilité des individus</h3>
                    <p class="text-3xl">9586</p>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">Bourses Erasmus Mundus</h3>
                    <p class="text-3xl">156</p>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">Mobilité jeunesse</h3>
                    <p class="text-3xl">7391</p>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">EES et ONGs partenaires</h3>
                    <p class="text-3xl">14.7 Milliards €</p>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">Projets de renforcement de capacités</h3>
                    <p class="text-3xl">54</p>
                </div>
                <div class="bg-blue-100 p-4 rounded-lg shadow-md text-center">
                    <h3 class="text-xl font-bold mb-2">Activités Jean Monnet</h3>
                    <p class="text-3xl">+11</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
