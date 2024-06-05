<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('mobs', function (Blueprint $table) {
        $table->id();
        $table->string('pic');
        $table->string('moroccan_partner');
        $table->string('european_partner_institution');
        $table->string('european_partner_pic');
        $table->string('european_partner_country');
        $table->string('european_partner_city');
        $table->year('year_of_call');
        $table->string('project_code');
        $table->string('project_duration');
        $table->integer('total_approved_mobilities');
        $table->integer('outgoing_student_mobilities');
        $table->integer('outgoing_approved_admin_staff_mobilities');
        $table->integer('outgoing_approved_academic_mobilities');
        $table->integer('incoming_student_mob');
        $table->integer('incoming_admin_staff_mob');
        $table->integer('incoming_acad_staff_mob');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approved_projects');
    }
};
