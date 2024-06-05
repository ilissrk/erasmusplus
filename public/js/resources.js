document.addEventListener('DOMContentLoaded', function() {
    // Charger le contenu des ressources s'il existe
    const savedContent = localStorage.getItem('resourceContent');
    if (savedContent) {
        document.getElementById('resourceContent').value = savedContent;
    }
});

// Fonction pour sauvegarder le contenu des ressources
function saveResourceContent() {
    const content = document.getElementById('resourceContent').value;
    localStorage.setItem('resourceContent', content);
    alert('Contenu des ressources enregistré avec succès.');
}
