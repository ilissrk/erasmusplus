<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        .email-link {
            color: #003399;
            text-decoration: underline;
        }
        .email-link:hover {
            color: #0056b3;
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
            <h2 class="text-2xl font-bold mb-4">Contactez-nous</h2>
            <p>Si vous avez des questions ou avez besoin de renseignements complémentaires, veuillez nous contacter à :</p>
            <p class="text-xl mt-4">
                <a href="mailto:contact@erasmusplus.ma" class="email-link">contact@erasmusplus.ma</a>
            </p>
        </div>
    </div>
</body>
</html>
