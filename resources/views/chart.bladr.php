<!DOCTYPE html>
<html>
<head>
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 75%">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', // Type de graphique : 'bar', 'line', 'pie', etc.
            data: {
                labels: [
                    @foreach($data as $item)
                        "{{ $item->mobilite_individus }}", // Remplacer `column_name` par le nom de la colonne que vous souhaitez afficher
                    @endforeach
                ],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        @foreach($data as $item)
                            {{ $item->value_column }}, // Remplacer `value_column` par le nom de la colonne de valeurs
                        @endforeach
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
