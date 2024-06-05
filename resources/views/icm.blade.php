<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ICM</title>
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css') }}" rel="stylesheet">
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
        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .section-title {
            background-color: #e0f7fa;
            padding: 10px;
            font-weight: bold;
            cursor: pointer;
        }
        .section-title:hover {
            background-color: #b2ebf2;
        }
        .section-content {
            display: none;
            padding: 10px;
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #003399;
            color: white;
        }
        .action-btn {
            display: none;
            position: relative;
        }
        .actions:hover .action-btn {
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            right: 0;
            z-index: 1;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .actions:hover .dropdown-content {
            display: block;
        }
    </style>
    <script>
        function toggleSectionContent(id) {
            const element = document.getElementById(id);
            element.style.display = element.style.display === 'none' ? 'block' : 'none';
        }

        function navigate(page) {
            window.location.href = page;
        }
    </script>
</head>
<body>
    <div class="header-top">
        <img src="{{ asset('images/cropped-logo-ERASMUS-fr.png') }}" alt="Erasmus+ Logo" class="logo">
        <img src="{{ asset('images/eu_funded_en.png') }}" alt="Erasmus+ Logo" class="logo">
    </div>
    <header class="flex justify-center">
        <nav>
            <span class="nav-link" onclick="navigate('{{ url('index') }}')">Accueil</span>
            <span class="nav-link" onclick="navigate('{{ url('myInstitution') }}')">Mon Institution</span>
            <span class="nav-link" onclick="navigate('{{ url('erasmusNumbers') }}')">Erasmus+ en chiffres</span>
            <span class="nav-link" onclick="navigate('{{ url('projects') }}')">Projets</span>
            <span class="nav-link" onclick="navigate('{{ url('icm') }}')">ICM</span>
            <span class="nav-link" onclick="navigate('{{ url('resources') }}')">Ressources</span>
            <span class="nav-link" onclick="navigate('{{ url('contactUs') }}')">Contactez-nous</span>
            <span class="nav-link" onclick="navigate('{{ url('forums') }}')">Forums</span>
        </nav>
    </header>
    <div class="container mx-auto mt-10">
        <div class="card" style="width: 100%;">
            <div class="header-section mb-4">
                <h2 class="text-2xl font-bold">ICM</h2>
                <div>
                    <button onclick="navigate('{{ url('project_form') }}')" class="bg-blue-500 text-white py-2 px-4 rounded">Fiche Projet Réalisé</button>   
                    <button onclick="navigate('{{ url('project_form2') }}')" class="bg-blue-500 text-white py-2 px-4 rounded">Fiche Projet Approuvé</button>
                </div>
            </div>
            <div class="section">
                <div class="section-title" onclick="toggleSectionContent('approvedProjects')">Mobilités approuvées</div>
                <div class="section-content" id="approvedProjects">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th rowspan="2">Pic</th>
                                    <th rowspan="2">Moroccan Partner</th>
                                    <th colspan="4">European Partner</th>
                                    <th rowspan="2">Year of call</th>
                                    <th rowspan="2">Project code</th>
                                    <th rowspan="2">Project duration</th>
                                    <th rowspan="2">Total approved mobilities</th>
                                    <th rowspan="2">Outgoing student mobilities</th>
                                    <th rowspan="2">Outgoing approved admin staff mobilities</th>
                                    <th rowspan="2">Outgoing approved academic mobilities</th>
                                    <th rowspan="2">Incoming Student mob</th>
                                    <th rowspan="2">Incoming Admin Staff Mob</th>
                                    <th rowspan="2">Incoming Acad Staff Mob</th>
                                </tr>
                                <tr>
                                    <th>Institution</th>
                                    <th>PIC</th>
                                    <th>Country</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Moroccan Institution</td>
                                    <td>European Institution</td>
                                    <td>PIC123456</td>
                                    <td>Country</td>
                                    <td>City</td>
                                    <td>2023</td>
                                    <td>1234</td>
                                    <td>12 months</td>
                                    <td>20</td>
                                    <td>10</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>10</td>
                                    <td>5</td>
                                    <td>5</td>
                                </tr>
                                <!-- Additional rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="section">
                <div class="section-title" onclick="toggleSectionContent('projectSheet')">Mobilités Réalisées</div>
                <div class="section-content" id="projectSheet">
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th rowspan="2">Pic</th>
                                    <th rowspan="2">Moroccan Partner</th>
                                    <th colspan="3">European Partner</th>
                                    <th rowspan="2">Year of call</th>
                                    <th rowspan="2">Project code</th>
                                    <th colspan="7">Mobility description</th>
                                    <th colspan="10">Participant description</th>
                                    <th colspan="2">Mobility period</th>
                                    <th rowspan="2">Brief qualitative description of the mobility</th>
                                    <th rowspan="2">Challenges Faced</th>
                                    <th rowspan="2">Other Comments</th>
                                </tr>
                                <tr>
                                    <th>University/Institution</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Mobility</th>
                                    <th>Mobility type</th>
                                    <th>Mobility Nature</th>
                                    <th>Discipline /speciality / field name</th>
                                    <th>Mobility Duration</th>
                                    <th>Mobility location</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Nationality</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Institution</th>
                                    <th>City</th>
                                    <th>Responsable (for staff)</th>
                                    <th>Department / service name (for staff)</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                    <th>Mobility Start Date</th>
                                    <th>Mobility End Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Moroccan Institution</td>
                                    <td>European Institution</td>
                                    <td>Country</td>
                                    <td>City</td>
                                    <td>2023</td>
                                    <td>1234</td>
                                    <td>Student</td>
                                    <td>Study period</td>
                                    <td>Master</td>
                                    <td>Computer Science</td>
                                    <td>6 months</td>
                                    <td>University of Example</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>American</td>
                                    <td>25</td>
                                    <td>M</td>
                                    <td>ENSIAS</td>
                                    <td>Rabat</td>
                                    <td>Professor</td>
                                    <td>Computer Science Department</td>
                                    <td>john.doe@example.com</td>
                                    <td>123-456-7890</td>
                                    <td>01-01-2023</td>
                                    <td>01-07-2023</td>
                                    <td>Good experience, learned a lot</td>
                                    <td>None</td>
                                    <td>Looking forward to more such opportunities</td>
                                </tr>
                                <!-- Additional rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
