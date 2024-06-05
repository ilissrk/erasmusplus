<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
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
        .resource-category {
            margin-top: 20px;
        }
        .resource-title {
            background-color: #e0f7fa;
            padding: 10px;
            font-weight: bold;
            cursor: pointer;
        }
        .resource-title:hover {
            background-color: #b2ebf2;
        }
        .resource-list {
            display: none;
            padding: 10px;
        }
        .resource-list a {
            color: #00796b;
            display: block;
            padding: 5px 0;
        }
        .resource-list a:hover {
            text-decoration: underline;
        }
    </style>
    <script defer src="app.js"></script>
    <script>
        function toggleResourceList(id) {
            const element = document.getElementById(id);
            element.style.display = element.style.display === 'none' ? 'block' : 'none';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="header-top">
        <img src="cropped-logo-ERASMUS-fr.png" alt="Erasmus+ Logo" class="logo">
        <img src="eu_funded_en.png" alt="Erasmus+ Logo" class="logo">
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
            <h2 class="text-2xl font-bold mb-4">Resources</h2>
            <div class="resource-category">
                <div class="resource-title" onclick="toggleResourceList('guides')">Guides et Manuels</div>
                <div class="resource-list" id="guides">
                    <a href="#">Guide 1</a>
                    <a href="#">Guide 2</a>
                    <a href="#">Guide 3</a>
                </div>
            </div>
            <div class="resource-category">
                <div class="resource-title" onclick="toggleResourceList('policies')">Politiques et réglementations</div>
                <div class="resource-list" id="policies">
                    <a href="#">Politique 1</a>
                    <a href="#">Politique 2</a>
                    <a href="#">Politique 3</a>
                </div>
            </div>
            <div class="resource-category">
                <div class="resource-title" onclick="toggleResourceList('templates')">Modèles et formulaires</div>
                <div class="resource-list" id="templates">
                    <a href="#">Modèle 1</a>
                    <a href="#">Modèle 2</a>
                    <a href="#">Modèle 3</a>
                </div>
            </div>
            <div class="mt-10">
                <h3 class="text-xl font-bold mb-4">Statistiques de Mobilité</h3>
                <div style="width: 100%; max-width: 600px; margin: auto;">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    'Mobilité Individus',
                    'Bourses Erasmus Mundus',
                    'Mobilité Jeunesse',
                    'EES ONGs Partenaire',
                    'Projets Renforcement Capacités',
                    'Activités Jean Monnet'
                ],
                datasets: [{
                    data: [1, 1, 1, 1, 1, 1], // Utilisez une valeur constante pour chaque catégorie
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                const labels = [
                                    "{{ $data->mobilite_individus }}",
                                    "{{ $data->bourses_erasmus_mundus }}",
                                    "{{ $data->mobilite_jeunesse }}",
                                    "{{ $data->ees_ongs_partenaire }}",
                                    "{{ $data->projets_renforcement_capacites }}",
                                    "{{ $data->activites_jean_monnet }}"
                                ];
                                return labels[tooltipItem.dataIndex];
                            }
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
