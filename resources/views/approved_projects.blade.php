<table>
    <thead>
        <tr>
            <th>Pic</th>
            <th>Moroccan Partner</th>
            <th>European Partner Institution</th>
            <th>European Partner PIC</th>
            <th>European Partner Country</th>
            <th>European Partner City</th>
            <th>Year of Call</th>
            <th>Project Code</th>
            <th>Project Duration</th>
            <th>Total Approved Mobilities</th>
            <th>Outgoing Student Mobilities</th>
            <th>Outgoing Approved Admin Staff Mobilities</th>
            <th>Outgoing Approved Academic Mobilities</th>
            <th>Incoming Student Mobilities</th>
            <th>Incoming Admin Staff Mobilities</th>
            <th>Incoming Academic Staff Mobilities</th>
        </tr>
    </thead>
    <tbody>
        @foreach($approvedProjects as $project)
            <tr>
                <td>{{ $project->pic }}</td>
                <td>{{ $project->moroccan_partner }}</td>
                <td>{{ $project->european_partner_institution }}</td>
                <td>{{ $project->european_partner_pic }}</td>
                <td>{{ $project->european_partner_country }}</td>
                <td>{{ $project->european_partner_city }}</td>
                <td>{{ $project->year_of_call }}</td>
                <td>{{ $project->project_code }}</td>
                <td>{{ $project->project_duration }}</td>
                <td>{{ $project->total_approved_mobilities }}</td>
                <td>{{ $project->outgoing_student_mobilities }}</td>
                <td>{{ $project->outgoing_approved_admin_staff_mobilities }}</td>
                <td>{{ $project->outgoing_approved_academic_mobilities }}</td>
                <td>{{ $project->incoming_student_mobilities }}</td>
                <td>{{ $project->incoming_admin_staff_mobilities }}</td>
                <td>{{ $project->incoming_academic_staff_mobilities }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
