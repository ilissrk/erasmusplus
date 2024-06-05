<table>
    <thead>
        <tr>
            <th>Pic</th>
            <th>Moroccan Partner</th>
            <th>University/Institution</th>
            <th>Country</th>
            <th>City</th>
            <th>Year of Call</th>
            <th>Project Code</th>
            <th>Mobility</th>
            <th>Mobility Type</th>
            <th>Mobility Nature</th>
            <th>Diploma</th>
            <th>Discipline</th>
            <th>Mobility Duration</th>
            <th>Mobility Location</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Nationality</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Institution</th>
            <th>Staff Responsibility</th>
            <th>Staff Department</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Mobility Start Date</th>
            <th>Mobility End Date</th>
            <th>Mobility Description</th>
            <th>Challenges Faced</th>
            <th>Other Comments</th>
        </tr>
    </thead>
    <tbody>
        @foreach($realizedProjects as $project)
            <tr>
                <td>{{ $project->pic }}</td>
                <td>{{ $project->moroccan_partner }}</td>
                <td>{{ $project->university_institution }}</td>
                <td>{{ $project->country }}</td>
                <td>{{ $project->city }}</td>
                <td>{{ $project->year_of_call }}</td>
                <td>{{ $project->project_code }}</td>
                <td>{{ $project->mobility }}</td>
                <td>{{ $project->mobility_type }}</td>
                <td>{{ $project->mobility_nature }}</td>
                <td>{{ $project->diploma }}</td>
                <td>{{ $project->discipline }}</td>
                <td>{{ $project->mobility_duration }}</td>
                <td>{{ $project->mobility_location }}</td>
                <td>{{ $project->first_name }}</td>
                <td>{{ $project->last_name }}</td>
                <td>{{ $project->nationality }}</td>
                <td>{{ $project->age }}</td>
                <td>{{ $project->gender }}</td>
                <td>{{ $project->institution }}</td>
                <td>{{ $project->staff_responsibility }}</td>
                <td>{{ $project->staff_department }}</td>
                <td>{{ $project->email }}</td>
                <td>{{ $project->telephone }}</td>
                <td>{{ $project->mobility_start_date }}</td>
                <td>{{ $project->mobility_end_date }}</td>
                <td>{{ $project->mobility_description }}</td>
                <td>{{ $project->challenges_faced }}</td>
                <td>{{ $project->other_comments }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
