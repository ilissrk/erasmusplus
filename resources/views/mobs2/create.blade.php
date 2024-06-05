@extends('base2')

@section('content')
    <div class="container">
        <h1>Create Mob</h1>
        <form action="{{ route('mobs2.store') }}" method="POST">
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
                <label for="university_institution">University Institution</label>
                <input type="text" class="form-control" id="university_institution" name="university_institution" required>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
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
                <label for="mobility">Mobility</label>
                <input type="text" class="form-control" id="mobility" name="mobility" required>
            </div>
            <div class="form-group">
                <label for="mobility_type">Mobility Type</label>
                <input type="text" class="form-control" id="mobility_type" name="mobility_type" required>
            </div>
            <div class="form-group">
                <label for="mobility_nature">Mobility Nature</label>
                <input type="text" class="form-control" id="mobility_nature" name="mobility_nature" required>
            </div>
            <div class="form-group">
                <label for="diploma">Diploma</label>
                <input type="text" class="form-control" id="diploma" name="diploma" required>
            </div>
            <div class="form-group">
                <label for="discipline">Discipline</label>
                <input type="text" class="form-control" id="discipline" name="discipline" required>
            </div>
            <div class="form-group">
                <label for="mobility_duration">Mobility Duration</label>
                <input type="number" class="form-control" id="mobility_duration" name="mobility_duration" required>
            </div>
            <div class="form-group">
                <label for="mobility_location">Mobility Location</label>
                <input type="text" class="form-control" id="mobility_location" name="mobility_location" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" class="form-control" id="nationality" name="nationality" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="institution">Institution</label>
                <input type="text" class="form-control" id="institution" name="institution" required>
            </div>
            <div class="form-group">
                <label for="staff_responsibility">Staff Responsibility</label>
                <input type="text" class="form-control" id="staff_responsibility" name="staff_responsibility" required>
            </div>
            <div class="form-group">
                <label for="staff_department">Staff Department</label>
                <input type="text" class="form-control" id="staff_department" name="staff_department" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" required>
            </div>
            <div class="form-group">
                <label for="mobility_start_date">Mobility Start Date</label>
                <input type="date" class="form-control" id="mobility_start_date" name="mobility_start_date" required>
            </div>
            <div class="form-group">
                <label for="mobility_end_date">Mobility End Date</label>
                <input type="date" class="form-control" id="mobility_end_date" name="mobility_end_date" required>
            </div>
            <div class="form-group">
                <label for="mobility_description">Mobility Description</label>
                <textarea class="form-control" id="mobility_description" name="mobility_description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="challenges_faced">Challenges Faced</label>
                <textarea class="form-control" id="challenges_faced" name="challenges_faced" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="other_comments">Other Comments</label>
                <textarea class="form-control" id="other_comments" name="other_comments" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
