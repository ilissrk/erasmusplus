<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_institutions_table.php
public function up()
{
    Schema::create('institutions', function (Blueprint $table) {
        $table->id();
        $table->string('institutionName');
        $table->string('status');
        $table->string('city');
        $table->string('region');
        $table->string('postalAddress');
        $table->string('website');
        $table->string('facebook')->nullable();
        $table->string('twitter')->nullable();
        $table->string('legalRepresentative');
        $table->json('internationalOffice');
        $table->json('icmContact');
        $table->json('cbheContact');
        $table->json('jeanMonnetContact');
        $table->json('intraAfriqueContact');
        $table->json('universityEstablishments')->nullable();
        $table->json('formations')->nullable();
        $table->json('courses')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
