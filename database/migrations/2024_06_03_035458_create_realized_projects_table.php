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
    Schema::create('mobs2', function (Blueprint $table) {
        $table->id();
        $table->string('pic');
        $table->string('moroccan_partner');
        $table->string('university_institution');
        $table->string('country');
        $table->string('city');
        $table->year('year_of_call');
        $table->string('project_code');
        $table->string('mobility');
        $table->string('mobility_type');
        $table->string('mobility_nature');
        $table->string('diploma');
        $table->string('discipline');
        $table->string('mobility_duration');
        $table->string('mobility_location');
        $table->string('first_name');
        $table->string('last_name');
        $table->string('nationality');
        $table->integer('age');
        $table->string('gender');
        $table->string('institution');
        $table->string('staff_responsibility')->nullable();
        $table->string('staff_department')->nullable();
        $table->string('email');
        $table->string('telephone');
        $table->date('mobility_start_date');
        $table->date('mobility_end_date');
        $table->text('mobility_description')->nullable();
        $table->text('challenges_faced')->nullable();
        $table->text('other_comments')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realized_projects');
    }
};
