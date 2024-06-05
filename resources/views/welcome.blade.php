<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Erasmus+</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .btn {
            background-color: #003399;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin: 10px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('storage/image.png') }}" alt="Erasmus+" class="mx-auto mb-6">
        <h1 class="text-3xl font-bold mb-6">Welcome to Erasmus+</h1>
        <div>
            <a href="{{ route('login') }}" class="btn">Login</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
        </div>
    </div>
</body>
</html>
