document.addEventListener('DOMContentLoaded', function() {
    // Charger les données existantes si elles existent
    const existingData = JSON.parse(localStorage.getItem('erasmusNumbers')) || {};
    document.getElementById('mobilityIndividuals').value = existingData.mobilityIndividuals || '';
    document.getElementById('erasmusMundus').value = existingData.erasmusMundus || '';
    document.getElementById('youthMobility').value = existingData.youthMobility || '';
    document.getElementById('partnerEESandNGOs').value = existingData.partnerEESandNGOs || '';
    document.getElementById('capacityBuildingProjects').value = existingData.capacityBuildingProjects || '';
    document.getElementById('jeanMonnetActivities').value = existingData.jeanMonnetActivities || '';
});

function saveErasmusNumbers() {
    const data = {
        mobilityIndividuals: document.getElementById('mobilityIndividuals').value,
        erasmusMundus: document.getElementById('erasmusMundus').value,
        youthMobility: document.getElementById('youthMobility').value,
        partnerEESandNGOs: document.getElementById('partnerEESandNGOs').value,
        capacityBuildingProjects: document.getElementById('capacityBuildingProjects').value,
        jeanMonnetActivities: document.getElementById('jeanMonnetActivities').value
    };

    localStorage.setItem('erasmusNumbers', JSON.stringify(data));
    alert('Les informations Erasmus+ en chiffres ont été enregistrées avec succès.');
}

