function navigate(page) {
    window.location.href = page;
}

// Exemple de données réelles
var totalMobilities = 123;
var incomingMobilitiesStudents = 78;
var incomingMobilitiesAcademicStaff = 45;
var incomingMobilitiesAdminStaff = 32;
var outgoingMobilitiesStudents = 67;
var outgoingMobilitiesAcademicStaff = 56;
var outgoingMobilitiesAdminStaff = 25;

// Mise à jour des valeurs des éléments HTML
document.getElementById('total-mobilities').innerText = totalMobilities;
document.getElementById('incoming-mobilities-students').innerText = incomingMobilitiesStudents;
document.getElementById('incoming-mobilities-academic-staff').innerText = incomingMobilitiesAcademicStaff;
document.getElementById('incoming-mobilities-admin-staff').innerText = incomingMobilitiesAdminStaff;
document.getElementById('outgoing-mobilities-students').innerText = outgoingMobilitiesStudents;
document.getElementById('outgoing-mobilities-academic-staff').innerText = outgoingMobilitiesAcademicStaff;
document.getElementById('outgoing-mobilities-admin-staff').innerText = outgoingMobilitiesAdminStaff;


function navigate(page) {
    window.location.href = page;
}
