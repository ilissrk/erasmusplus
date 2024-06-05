<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Erasmus+ Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        .nav-bar {
            background-color: #003399;
            color: white;
            padding: 0.25rem 1rem; /* Adjusted padding to make the bar thinner */
        }
        .nav-link {
            color: white;
            margin: 0 10px;
            cursor: pointer;
            font-size: 0.875rem; /* Adjusted font size for a thinner appearance */
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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .card-header {
            background-color: #003399;
            color: white;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            font-size: 1.25rem;
            width: 100%;
            text-align: center;
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(800px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .dashboard-grid .card:first-child {
            grid-column: span 2;
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
        .mobility-sections {
            display: flex;
            justify-content: space-between;
            width: 100%;
            text-align: center;
        }
        .mobility-sections > div {
            flex: 1;
        }
        .mobility-sections ul {
            list-style-type: none;
            padding-left: 0;
        }
    </style>
    <script>
        function navigate(route) {
            window.location.href = route;
        }
    </script>
</head>
<body>
    <header class="p-4 d-flex justify-content-between align-items-center">
        <img src="{{ asset('images/cropped-logo-ERASMUS-fr.png') }}" alt="Erasmus+ Logo" class="logo">
        <img src="{{ asset('images/eu_funded_en.png') }}" alt="EU Funded Logo" class="logo">
    </header>
    <nav class="nav-bar shadow-md d-flex justify-content-center">
        <span class="nav-link" onclick="navigate('{{ url('/') }}')">Accueil</span>
        <span class="nav-link" onclick="navigate('{{ url('admin/myInstitution') }}')">Institutions</span>
        <span class="nav-link" onclick="navigate('{{ url('erasmusNumbers') }}')">Erasmus+ en chiffres</span>
        <span class="nav-link" onclick="navigate('{{ url('admin/statistics') }}')">ICM</span>
        <span class="nav-link" onclick="navigate('{{ url('resources') }}')">Ressources</span>
        <span class="nav-link" onclick="navigate('{{ url('/admin/contactUs') }}')">Contactez-nous</span>
        <span class="nav-link" onclick="navigate('{{ url('forums') }}')">Forums</span>
    </nav>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto" style="width: 95%;">
            <div class="card-header">Espace ERASMUS +</div>
            <div class="dashboard-grid">
                <div class="card">
                    <h2 class="text-2xl font-bold mb-4">Données Globales de la Mobilité</h2>
                    <div class="text-center">
                        <p class="text-xl font-semibold">Total des mobilités: <span id="total-mobilities" class="text-blue-700">403</span></p>
                    </div>
                    <div class="mobility-sections">
                        <div>
                            <h3 class="text-xl font-semibold">Entrantes d’Europe: 150</h3>
                            <ul>
                                <li>Étudiants: 63<span id="incoming-mobilities-students" class="text-blue-700"></span></li>
                                <li>Personnel académique: 48<span id="incoming-mobilities-academic-staff" class="text-blue-700"></span></li>
                                <li>Personnel administratif: 39<span id="incoming-mobilities-admin-staff" class="text-blue-700"></span></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold">Sortantes vers l’Europe: 253</h3>
                            <ul>
                                <li>Étudiants: 96<span id="outgoing-mobilities-students" class="text-blue-700"></span></li>
                                <li>Personnel académique: 67<span id="outgoing-mobilities-academic-staff" class="text-blue-700"></span></li>
                                <li>Personnel administratif: 90<span id="outgoing-mobilities-admin-staff" class="text-blue-700"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h2 class="text-xl font-bold mb-2">Statistiques de Mobilité</h2>
                    <a class="btn py-2 px-4 rounded" href="{{ url('admin/statistics') }}">Voir les statistiques</a>
                </div>
                <div class="card">
                    <h2 class="text-xl font-bold mb-2">Ressources</h2>
                    <a class="btn py-2 px-4 rounded" href="{{ url('resources') }}">Accéder aux ressources</a>
                </div>
                <div class="card">
                    <h2 class="text-xl font-bold mb-2">Contactez-nous</h2>
                    <a class="btn py-2 px-4 rounded" href="{{ url('admin/contactUs') }}">Modifier les informations de contact</a>
                </div>
                <div class="card">
                    <h2 class="text-xl font-bold mb-2">Forums</h2>
                    <a class="btn py-2 px-4 rounded" href="{{ url('forums') }}">Accéder aux forums</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
