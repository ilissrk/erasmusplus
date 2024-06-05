<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
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
        .card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
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
    </style>
</head>
<body>
    <header class="p-4 flex justify-between items-center bg-white">
        <img src="{{ asset('images/cropped-logo-ERASMUS-fr.png') }}" alt="Erasmus+ Logo" class="logo">
        <img src="{{ asset('images/eu_funded_en.png') }}" alt="EU Funded Logo" class="logo">
    </header>
    <nav class="nav-bar shadow-md d-flex justify-content-center">
        <span class="nav-link" onclick="navigate('{{ url('admin.index') }}')">Accueil</span>
        <span class="nav-link" onclick="navigate('{{ url('myInstitution') }}')">Institutions</span>
        <span class="nav-link" onclick="navigate('{{ url('erasmusNumbers') }}')">Erasmus+ en chiffres</span>
        <span class="nav-link" onclick="navigate('{{ url('statistics') }}')">ICM</span>
        <span class="nav-link" onclick="navigate('{{ url('resources') }}')">Ressources</span>
        <span class="nav-link" onclick="navigate('{{ url('contactUs') }}')">Contactez-nous</span>
        <span class="nav-link" onclick="navigate('{{ url('forums') }}')">Forums</span>
    </nav>
    <div class="container mx-auto mt-10 text-center">
        <div class="card mx-auto" style="max-width: 800px;">
            <h1 class="text-2xl font-bold mb-5">Contacts</h1>
            <section id="contact-details" class="mb-8">
                <h2 class="text-2xl font-bold mb-4">Détails des Contacts</h2>
                <p id="contact-email">Email: contact@erasmusplus.ma</p>
                <!-- Ajoutez plus de détails de contact ici -->
            </section>
            <button class="btn-primary-custom" onclick="enableEdit()">Modifier les informations de contact</button>
            <div id="edit-contact" style="display: none;" class="mt-4">
                <textarea id="contactContent" class="w-full h-32 p-4 border rounded mb-4" placeholder="Écrivez les nouvelles informations de contact ici..."></textarea>
                <button class="btn-primary-custom" onclick="saveContactContent()">Enregistrer</button>
            </div>
        </div>
    </div>
    <script>
        function navigate(route) {
            window.location.href = route;
        }

        function enableEdit() {
            document.getElementById('edit-contact').style.display = 'block';
        }

        function saveContactContent() {
            const content = document.getElementById('contactContent').value;
            document.getElementById('contact-email').innerText = 'Email: ' + content;
            document.getElementById('edit-contact').style.display = 'none';
        }
    </script>
    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js') }}"></script>
</body>
</html>
