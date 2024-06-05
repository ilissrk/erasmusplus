<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Mobilities Form</title>
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
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group button {
            background-color: #003399;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
    </style>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</head>
<body>
    <div class="header-top">
        <img src="cropped-logo-ERASMUS-fr.png" alt="Erasmus+ Logo" class="logo">
        <img src="eu_funded_en.png" alt="Erasmus+ Logo" class="logo">
    </div>
    <header class="flex justify-center">
        <nav>
            <span class="nav-link" onclick="navigate('index.html')">Accueil</span>
            <span class="nav-link" onclick="navigate('myInstitution.html')">Mon Institution</span>
            <span class="nav-link" onclick="navigate('erasmusNumbers.html')">Erasmus+ en chiffres</span>
            <span class="nav-link" onclick="navigate('icm.html')">ICM</span>
            <span class="nav-link" onclick="navigate('resources.html')">Ressources</span>
            <span class="nav-link" onclick="navigate('contactUs.html')">Contactez-nous</span>
            <span class="nav-link" onclick="navigate('forums.html')">Forums</span>
        </nav>
    </header>
    <div class="container mx-auto mt-10">
        <div class="card mx-auto" style="max-width: 600px;">
            <h2 class="text-2xl font-bold mb-4">Fiche Projet Approuvé</h2>
            <form action="{{ url('/projects') }}" method="POST">
                @csrf
                <!-- Champs de formulaire -->
                <div class="form-group">
                    <label for="pic">PIC</label>
                    <input type="text" id="pic" name="pic">
                </div>
                <div class="form-group">
                    <label for="moroccanPartner">Moroccan partner</label>
                    <input type="text" id="moroccanPartner" name="moroccanPartner">
                </div>
                <div class="form-group">
                    <label for="europeanPartnerInstitution">European partner (Institution)</label>
                    <input type="text" id="europeanPartnerInstitution" name="europeanPartnerInstitution">
                </div>
                <div class="form-group">
                    <label for="europeanPartnerPIC">European partner (PIC)</label>
                    <input type="text" id="europeanPartnerPIC" name="europeanPartnerPIC">
                </div>
                <div class="form-group">
                    <label for="europeanPartnerCountry">European partner (Country)</label>
                    <input type="text" id="europeanPartnerCountry" name="europeanPartnerCountry">
                </div>
                <div class="form-group">
                    <label for="europeanPartnerCity">European partner (City)</label>
                    <input type="text" id="europeanPartnerCity" name="europeanPartnerCity">
                </div>
                <div class="form-group">
                    <label for="yearOfCall">Year of call</label>
                    <input type="text" id="yearOfCall" name="yearOfCall">
                </div>
                <div class="form-group">
                    <label for="projectCode">Project code</label>
                    <input type="text" id="projectCode" name="projectCode">
                </div>
                <div class="form-group">
                    <label for="projectDuration">Project duration (2 or 3 years)</label>
                    <input type="text" id="projectDuration" name="projectDuration">
                </div>
                <div class="form-group">
                    <label for="totalApprovedMobilities">Total approved mobilities</label>
                    <input type="number" id="totalApprovedMobilities" name="totalApprovedMobilities">
                </div>
                <div class="form-group">
                    <label for="outgoingStudentMobilities">Outgoing student mobilities</label>
                    <input type="number" id="outgoingStudentMobilities" name="outgoingStudentMobilities">
                </div>
                <div class="form-group">
                    <label for="outgoingApprovedAdminStaffMobilities">Outgoing approved admin staff mobilities</label>
                    <input type="number" id="outgoingApprovedAdminStaffMobilities" name="outgoingApprovedAdminStaffMobilities">
                </div>
                <div class="form-group">
                    <label for="outgoingApprovedAcademicMobilities">Outgoing approved academic mobilities</label>
                    <input type="number" id="outgoingApprovedAcademicMobilities" name="outgoingApprovedAcademicMobilities">
                </div>
                <div class="form-group">
                    <label for="incomingStudentMob">Incoming student mob</label>
                    <input type="number" id="incomingStudentMob" name="incomingStudentMob">
                </div>
                <div class="form-group">
                    <label for="incomingAdminStaffMob">Incoming admin staff mob</label>
                    <input type="number" id="incomingAdminStaffMob" name="incomingAdminStaffMob">
                </div>
                <div class="form-group">
                    <label for="incomingAcadStaffMob">Incoming academic staff mob</label>
                    <input type="number" id="incomingAcadStaffMob" name="incomingAcadStaffMob">
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
