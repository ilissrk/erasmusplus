<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erasmus Infos</title>
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
        .stat-box {
            background-color: #e0f7fa;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            display: inline-block;
            min-width: 150px;
        }
    </style>
</head>
<body>
    <div class="header-top">
        <img src="{{ asset('images/cropped-logo-ERASMUS-fr.png') }}" alt="Erasmus+ Logo" class="logo">
        <img src="{{ asset('images/eu_funded_en.png') }}" alt="Erasmus+ Logo" class="logo">
    </div>
    <header class="flex justify-center">
        <nav>
            <span class="nav-link" onclick="navigate('index.html')">Accueil</span>
            <span class="nav-link" onclick="navigate('myInstitution.html')">Mon Institution</span>
            <span class="nav-link" onclick="navigate('erasmusNumbers.html')">Erasmus+ en chiffres</span>
            <span class="nav-link" onclick="navigate('icm.html')">ICM</span>
            <span class="nav-link" onclick="navigate('resources.html')">Ressources</span>
            <span class="nav-link" onclick="navigate('contactUs.html')">Contactez-nous</span>
            <span class="nav-link" onclick="navigate('forums.html')">Forums</span>
            <span class="nav-link" onclick="navigate('login.html')">Déconnexion</span>
        </nav>
    </header>
    <div class="container mx-auto mt-10 text-center">
        <div class="card mx-auto" style="max-width: 800px;">
            <h2 class="text-2xl font-bold mb-4">Erasmus+ en chiffres</h2>
            @foreach($erasmusInfos as $info)
                <div class="stat-box">
                    <p><strong>Mobilité des individus:</strong> {{ $info->mobilite_individus }}</p>
                </div>
                <div class="stat-box">
                    <p><strong>Bourses Erasmus Mundus:</strong> {{ $info->bourses_erasmus_mundus }}</p>
                </div>
                <div class="stat-box">
                    <p><strong>Mobilité jeunesse:</strong> {{ $info->mobilite_jeunesse }}</p>
                </div>
                <div class="stat-box">
                    <p><strong>EES et ONGs partenaires:</strong> {{ $info->ees_ongs_partenaire }}</p>
                </div>
                <div class="stat-box">
                    <p><strong>Projets de renforcement de capacités:</strong> {{ $info->projets_renforcement_capacites }}</p>
                </div>
                <div class="stat-box">
                    <p><strong>Activités Jean Monnet:</strong> {{ $info->activities_jean_monnet }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
