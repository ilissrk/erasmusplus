<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques de Mobilité</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #f0f4f8;
        }
        /* Votre CSS existant */
    </style>
</head>
<body>
    <!-- Votre HTML existant -->
    <script>
        function navigate(page) {
            window.location.href = page;
        }
        
        // Data pour le chart
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('statisticsChart').getContext('2d');
            const statisticsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($mobilitiesStats->pluck('year')),
                    datasets: [{
                        label: 'Mobilités',
                        data: @json($mobilitiesStats->pluck('total')),
                        backgroundColor: '#003399'
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Data pour les tableaux
            const approvedMobilitiesTableBody = document.getElementById('approvedMobilitiesTableBody');
            const realizedMobilitiesTableBody = document.getElementById('realizedMobilitiesTableBody');

            // Remplir le tableau des mobilités approuvées
            @foreach($approvedMobilities as $mobility)
                approvedMobilitiesTableBody.innerHTML += `
                    <tr>
                        <td>{{ $mobility->pic }}</td>
                        <td>{{ $mobility->marocain_partner }}</td>
                        <td>{{ $mobility->european_partner }}</td>
                        <td>{{ $mobility->pic_european }}</td>
                        <td>{{ $mobility->country }}</td>
                        <td>{{ $mobility->city }}</td>
                        <td>{{ $mobility->year }}</td>
                        <td>{{ $mobility->project_code }}</td>
                        <td>{{ $mobility->project_duration }}</td>
                        <td>{{ $mobility->total_mobilities }}</td>
                        <td>{{ $mobility->outgoing_students }}</td>
                        <td>{{ $mobility->outgoing_staff }}</td>
                        <td>{{ $mobility->outgoing_academic }}</td>
                        <td>{{ $mobility->incoming_students }}</td>
                        <td>{{ $mobility->incoming_staff }}</td>
                        <td>{{ $mobility->incoming_academic }}</td>
                    </tr>
                `;
            @endforeach

            // Remplir le tableau des mobilités réalisées
            @foreach($realizedMobilities as $mobility)
                realizedMobilitiesTableBody.innerHTML += `
                    <tr>
                        <td>{{ $mobility->pic }}</td>
                        <td>{{ $mobility->marocain_partner }}</td>
                        <td>{{ $mobility->european_partner }}</td>
                        <td>{{ $mobility->country }}</td>
                        <td>{{ $mobility->city }}</td>
                        <td>{{ $mobility->year }}</td>
                        <td>{{ $mobility->project_code }}</td>
                        <td>{{ $mobility->mobility_type }}</td>
                        <td>{{ $mobility->mobility_nature }}</td>
                        <td>{{ $mobility->discipline }}</td>
                        <td>{{ $mobility->duration }}</td>
                        <td>{{ $mobility->mobility_place }}</td>
                        <td>{{ $mobility->firstname }}</td>
                        <td>{{ $mobility->lastname }}</td>
                        <td>{{ $mobility->nationality }}</td>
                        <td>{{ $mobility->age }}</td>
                        <td>{{ $mobility->gender }}</td>
                        <td>{{ $mobility->institution }}</td>
                        <td>{{ $mobility->institution_city }}</td>
                        <td>{{ $mobility->responsible }}</td>
                        <td>{{ $mobility->department }}</td>
                        <td>{{ $mobility->email }}</td>
                        <td>{{ $mobility->phone }}</td>
                        <td>{{ $mobility->start_date }}</td>
                        <td>{{ $mobility->end_date }}</td>
                        <td>{{ $mobility->qualitative_description }}</td>
                        <td>{{ $mobility->challenges }}</td>
                        <td>{{ $mobility->comments }}</td>
                    </tr>
                `;
            @endforeach
        });
    </script>
</body>
</html>
