document.addEventListener('DOMContentLoaded', function() {
    const universityId = new URLSearchParams(window.location.search).get('id');
    fetch('universities.json')
        .then(response => response.json())
        .then(data => {
            const university = data.find(u => u.id === universityId);
            if (university) {
                document.getElementById('universityName').textContent = university.name;
                document.getElementById('universityLocation').textContent = `Localisation: ${university.location}`;
                document.getElementById('universityContact').textContent = `Contact: ${university.contact}`;
                document.getElementById('universityResults').textContent = university.results;

                const statisticsData = {
                    labels: ['Staff', 'Étudiants'],
                    datasets: [{
                        label: 'Mobilités Entrantes',
                        data: university.statistics.incoming,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Mobilités Sortantes',
                        data: university.statistics.outgoing,
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    }]
                };

                const ctx = document.getElementById('statisticsChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: statisticsData,
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        })
        .catch(error => console.error('Erreur lors du chargement des données:', error));
});
