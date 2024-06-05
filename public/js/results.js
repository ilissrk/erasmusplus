document.addEventListener('DOMContentLoaded', function() {
    const universities = [
        { name: 'Université 1', id: 'uni1' },
        { name: 'Université 2', id: 'uni2' },
        { name: 'Université 3', id: 'uni3' },
        // Ajoutez d'autres universités ici
    ];

    const universitySelect = document.getElementById('universitySelect');
    const universityName = document.getElementById('universityName');
    const showResultsButton = document.getElementById('showResults');
    const showStatisticsButton = document.getElementById('showStatistics');
    const showProfileButton = document.getElementById('showProfile');

    universities.forEach(university => {
        const option = document.createElement('option');
        option.value = university.id;
        option.textContent = university.name;
        universitySelect.appendChild(option);
    });

    universitySelect.addEventListener('change', function() {
        const selectedUniversity = universities.find(u => u.id === this.value);
        universityName.textContent = selectedUniversity ? selectedUniversity.name : '';
        showResultsButton.style.display = selectedUniversity ? 'inline-block' : 'none';
        showStatisticsButton.style.display = selectedUniversity ? 'inline-block' : 'none';
        showProfileButton.style.display = selectedUniversity ? 'inline-block' : 'none';
    });

    showResultsButton.addEventListener('click', function() {
        const selectedUniversity = universitySelect.value;
        if (selectedUniversity) {
            window.location.href = `results-${selectedUniversity}.html`;
        }
    });

    showStatisticsButton.addEventListener('click', function() {
        const selectedUniversity = universitySelect.value;
        if (selectedUniversity) {
            window.location.href = `statistics-${selectedUniversity}.html`;
        }
    });

    showProfileButton.addEventListener('click', function() {
        const selectedUniversity = universitySelect.value;
        if (selectedUniversity) {
            window.location.href = `profile-${selectedUniversity}.html`;
        }
    });
});
