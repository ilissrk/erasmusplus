<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realized Mobilities Form</title>
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
            <h2 class="text-2xl font-bold mb-4">Fiche projet Réalisé</h2>
            <form action="{{ url('/projects') }}" method="POST">
                @csrf
                <!-- Champs de formulaire -->
                <div class="form-group">
                    <label for="pic">Pic</label>
                    <input type="text" id="pic" name="pic">
                </div>
                <div class="form-group">
                    <label for="moroccanPartner">Moroccan partner</label>
                    <input type="text" id="moroccanPartner" name="moroccanPartner">
                </div>
                <div class="form-group">
                    <label for="universityInstitution">University/Institution</label>
                    <input type="text" id="universityInstitution" name="universityInstitution">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" id="country" name="country">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city">
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
                    <label for="mobility">Mobility</label>
                    <input type="text" id="mobility" name="mobility">
                </div>
                <div class="form-group">
                    <label for="mobilityType">Mobility type</label>
                    <input type="text" id="mobilityType" name="mobilityType">
                </div>
                <div class="form-group">
                    <label for="mobilityNature">Mobility nature</label>
                    <input type="text" id="mobilityNature" name="mobilityNature">
                </div>
                <div class="form-group">
                    <label for="diploma">Diploma</label>
                    <input type="text" id="diploma" name="diploma">
                </div>
                <div class="form-group">
                    <label for="discipline">Discipline / specialty / field name</label>
                    <input type="text" id="discipline" name="discipline">
                </div>
                <div class="form-group">
                    <label for="mobilityDuration">Mobility duration</label>
                    <input type="text" id="mobilityDuration" name="mobilityDuration">
                </div>
                <div class="form-group">
                    <label for="mobilityLocation">Mobility location</label>
                    <input type="text" id="mobilityLocation" name="mobilityLocation">
                </div>
                <div class="form-group">
                    <label for="firstName">First name</label>
                    <input type="text" id="firstName" name="firstName">
                </div>
                <div class="form-group">
                    <label for="lastName">Last name</label>
                    <input type="text" id="lastName" name="lastName">
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <input type="text" id="nationality" name="nationality">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="age">
                </div>
                <div class="form-group">
                    <label for="gender">Gender (M / F)</label>
                    <input type="text" id="gender" name="gender">
                </div>
                <div class="form-group">
                    <label for="institution">Institution</label>
                    <input type="text" id="institution" name="institution">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city">
                </div>
                <div class="form-group">
                    <label for="staffResponsibility">For staff : PESA, PH, PES, chef de service, chef de division, responsable // for students : N/A</label>
                    <input type="text" id="staffResponsibility" name="staffResponsibility">
                </div>
                <div class="form-group">
                    <label for="staffDepartment">For staff : department name / service name</label>
                    <input type="text" id="staffDepartment" name="staffDepartment">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="tel" id="telephone" name="telephone">
                </div>
                <div class="form-group">
                    <label for="mobilityStartDate">Mobility Start Date</label>
                    <input type="date" id="mobilityStartDate" name="mobilityStartDate">
                </div>
                <div class="form-group">
                    <label for="mobilityEndDate">Mobility End Date</label>
                    <input type="date" id="mobilityEndDate" name="mobilityEndDate">
                </div>
                <div class="form-group">
                    <label for="mobilityDescription">Brief qualitative description of the mobility (activities, etc.)</label>
                    <textarea id="mobilityDescription" name="mobilityDescription" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="challengesFaced">Challenges faced</label>
                    <textarea id="challengesFaced" name="challengesFaced" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="otherComments">Other comments</label>
                    <textarea id="otherComments" name="otherComments" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
