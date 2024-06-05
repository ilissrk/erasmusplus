@extends('base')

@section('content')
    <div class="container">
        <h1>Create Mob</h1>
        <form action="{{ route('mobs.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="pic">PIC</label>
                <input type="text" class="form-control" id="pic" name="pic" required>
            </div>
            <div class="form-group">
                <label for="moroccan_partner">Moroccan Partner</label>
                <input type="text" class="form-control" id="moroccan_partner" name="moroccan_partner" required>
            </div>
            <div class="form-group">
                <label for="european_partner_institution">European Partner Institution</label>
                <input type="text" class="form-control" id="european_partner_institution" name="european_partner_institution" required>
            </div>
            <div class="form-group">
                <label for="european_partner_pic">European Partner PIC</label>
                <input type="text" class="form-control" id="european_partner_pic" name="european_partner_pic" required>
            </div>
            <div class="form-group">
                <label for="european_partner_country">European Partner Country</label>
                <input type="text" class="form-control" id="european_partner_country" name="european_partner_country" required>
            </div>
            <div class="form-group">
                <label for="european_partner_city">European Partner City</label>
                <input type="text" class="form-control" id="european_partner_city" name="european_partner_city" required>
            </div>
            <div class="form-group">
                <label for="year_of_call">Year of Call</label>
                <input type="number" class="form-control" id="year_of_call" name="year_of_call" required>
            </div>
            <div class="form-group">
                <label for="project_code">Project Code</label>
                <input type="text" class="form-control" id="project_code" name="project_code" required>
            </div>
            <div class="form-group">
                <label for="project_duration">Project Duration</label>
                <input type="number" class="form-control" id="project_duration" name="project_duration" required>
            </div>
            <div class="form-group">
                <label for="total_approved_mobilities">Total Approved Mobilities</label>
                <input type="number" class="form-control" id="total_approved_mobilities" name="total_approved_mobilities" required>
            </div>
            <div class="form-group">
                <label for="outgoing_student_mobilities">Outgoing Student Mobilities</label>
                <input type="number" class="form-control" id="outgoing_student_mobilities" name="outgoing_student_mobilities" required>
            </div>
            <div class="form-group">
                <label for="outgoing_approved_admin_staff_mobilities">Outgoing Approved Admin Staff Mobilities</label>
                <input type="number" class="form-control" id="outgoing_approved_admin_staff_mobilities" name="outgoing_approved_admin_staff_mobilities" required>
            </div>
            <div class="form-group">
                <label for="outgoing_approved_academic_mobilities">Outgoing Approved Academic Mobilities</label>
                <input type="number" class="form-control" id="outgoing_approved_academic_mobilities" name="outgoing_approved_academic_mobilities" required>
            </div>
            <div class="form-group">
                <label for="incoming_student_mob">Incoming Student Mobilities</label>
                <input type="number" class="form-control" id="incoming_student_mob" name="incoming_student_mob" required>
            </div>
            <div class="form-group">
                <label for="incoming_admin_staff_mob">Incoming Admin Staff Mobilities</label>
                <input type="number" class="form-control" id="incoming_admin_staff_mob" name="incoming_admin_staff_mob" required>
            </div>
            <div class="form-group">
                <label for="incoming_acad_staff_mob">Incoming Academic Staff Mobilities</label>
                <input type="number" class="form-control" id="incoming_acad_staff_mob" name="incoming_acad_staff_mob" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
