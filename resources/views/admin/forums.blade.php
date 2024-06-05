<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .logo {
            max-height: 100px;
        }
        .nav-bar {
            background-color: #003399;
            color: white;
            padding: 0.25rem 1rem;
        }
        .nav-link {
            color: white;
            margin: 0 10px;
            cursor: pointer;
            font-size: 0.875rem;
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
        .btn-primary-custom {
            background-color: #003399;
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
            text-align: center;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .btn-primary-custom:hover {
            background-color: #0056b3;
        }
        .forum-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .search-bar {
            margin-bottom: 20px;
        }
        .discussion-list {
            max-height: 600px;
            overflow-y: auto;
        }
        .discussion-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .discussion-title {
            font-weight: bold;
        }
    </style>
    <script>
        function navigate(page) {
            window.location.href = page;
        }

        function filterDiscussions() {
            const searchValue = document.getElementById('searchBar').value.toLowerCase();
            const discussions = document.getElementsByClassName('discussion-item');
            Array.from(discussions).forEach(discussion => {
                const discussionTitle = discussion.querySelector('.discussion-title').innerText.toLowerCase();
                if (discussionTitle.includes(searchValue)) {
                    discussion.style.display = 'flex';
                } else {
                    discussion.style.display = 'none';
                }
            });
        }
    </script>
</head>
<body>
    <header class="p-4 flex justify-between items-center bg-white">
        <img src="cropped-logo-ERASMUS-fr.png" alt="Erasmus+ Logo" class="logo">
        <img src="eu_funded_en.png" alt="EU Funded Logo" class="logo">
    </header>
    <nav class="nav-bar shadow-md d-flex justify-content-center">
        <span class="nav-link" onclick="navigate('index.html')">Accueil</span>
        <span class="nav-link" onclick="navigate('myInstitution.html')">Institutions</span>
        <span class="nav-link" onclick="navigate('erasmusNumbers.html')">Erasmus+ en chiffres</span>
        <span class="nav-link" onclick="navigate('statistics.html')">ICM</span>
        <span class="nav-link" onclick="navigate('resources.html')">Ressources</span>
        <span class="nav-link" onclick="navigate('contactUs.html')">Contactez-nous</span>
        <span class="nav-link" onclick="navigate('forums.html')">Forums</span>
    </nav>
    <div class="container mx-auto mt-10 text-center">
        <div class="card mx-auto" style="max-width: 1200px;">
            <div class="forum-header">
                <h1 class="text-2xl font-bold">Forums</h1>
                <button class="btn-primary-custom" onclick="navigate('newDiscussion.html')">Créer une Nouvelle Discussion</button>
            </div>
            <input type="text" id="searchBar" class="search-bar w-full p-2 border rounded" placeholder="Rechercher une discussion..." onkeyup="filterDiscussions()">
            <div class="discussion-list">
                <div class="discussion-item">
                    <span class="discussion-title">Bienvenue sur le Forum Erasmus+</span>
                    <button class="btn-primary-custom" onclick="navigate('discussionDetails.html?id=1')">Voir</button>
                </div>
                <div class="discussion-item">
                    <span class="discussion-title">Conseils pour les étudiants en mobilité</span>
                    <button class="btn-primary-custom" onclick="navigate('discussionDetails.html?id=2')">Voir</button>
                </div>
                <div class="discussion-item">
                    <span class="discussion-title">Partage d'expériences de mobilité</span>
                    <button class="btn-primary-custom" onclick="navigate('discussionDetails.html?id=3')">Voir</button>
                </div>
                <!-- Ajoutez plus de discussions ici -->
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
