document.addEventListener('DOMContentLoaded', function() {
    // Exemple de données statistiques
    var statisticsData = {
        labels: ['Étudiants', 'Personnel académique', 'Personnel administratif'],
        datasets: [{
            label: 'Mobilités Entrantes',
            data: [78, 45, 32], // Remplacez par les données réelles
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }, {
            label: 'Mobilités Sortantes',
            data: [67, 56, 25], // Remplacez par les données réelles
            backgroundColor: 'rgba(255, 206, 86, 0.2)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        }]
    };

    var ctx = document.getElementById('statisticsChart').getContext('2d');
    var statisticsChart = new Chart(ctx, {
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

    // Exemple de données pour le tableau des mobilités approuvées
    var approvedMobilityData = [
        {
            pic: "1",
            moroccanPartner: "Institution Marocaine",
            europeanPartner: "Institution Européenne",
            picEuropean: "PIC123456",
            country: "Pays",
            city: "Ville",
            yearOfCall: "2023",
            projectCode: "1234",
            projectDuration: "12 mois",
            totalApprovedMobilities: 20,
            outgoingStudentMobilities: 10,
            outgoingAdminStaffMobilities: 5,
            outgoingAcademicMobilities: 5,
            incomingStudentMob: 10,
            incomingAdminStaffMob: 5,
            incomingAcadStaffMob: 5
        }
        // Ajoutez d'autres entrées ici
    ];

    var tableBodyApproved = document.getElementById('approvedMobilitiesTableBody');
    approvedMobilityData.forEach(function(rowData) {
        var row = document.createElement('tr');
        
        Object.values(rowData).forEach(function(cellData) {
            var cell = document.createElement('td');
            cell.className = 'border px-4 py-2';
            cell.textContent = cellData;
            row.appendChild(cell);
        });

        tableBodyApproved.appendChild(row);
    });

    // Exemple de données pour le tableau des mobilités réalisées
    var realizedMobilityData = [
        {
            pic: "1",
            moroccanPartner: "Institution Marocaine",
            europeanPartner: "Institution Européenne",
            country: "Pays",
            city: "Ville",
            yearOfCall: "2023",
            projectCode: "1234",
            mobility: "Étudiant",
            mobilityType: "Période d'étude",
            mobilityNature: "Master",
            discipline: "Informatique",
            mobilityDuration: "6 mois",
            mobilityLocation: "Université d'Exemple",
            firstName: "John",
            lastName: "Doe",
            nationality: "Américaine",
            age: 25,
            gender: "M",
            institution: "ENSIAS",
            city: "Rabat",
            responsable: "Professeur",
            department: "Département d'Informatique",
            email: "john.doe@example.com",
            telephone: "123-456-7890",
            startDate: "01-01-2023",
            endDate: "01-07-2023",
            qualitativeDescription: "Bonne expérience, beaucoup appris",
            challengesFaced: "Aucun",
            otherComments: "Hâte d'avoir plus d'opportunités similaires"
        }
        // Ajoutez d'autres entrées ici
    ];

    var tableBodyRealized = document.getElementById('realizedMobilitiesTableBody');
    realizedMobilityData.forEach(function(rowData) {
        var row = document.createElement('tr');
        
        Object.values(rowData).forEach(function(cellData) {
            var cell = document.createElement('td');
            cell.className = 'border px-4 py-2';
            cell.textContent = cellData;
            row.appendChild(cell);
        });

        tableBodyRealized.appendChild(row);
    });
});

