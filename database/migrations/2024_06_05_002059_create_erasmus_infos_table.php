<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateErasmusInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('erasmus_infos', function (Blueprint $table) {
            $table->id();
            $table->string('mobilite_individus');
            $table->string('bourses_erasmus_mundus');
            $table->string('mobilite_jeunesse');
            $table->string('ees_ongs_partenaire');
            $table->string('projets_renforcement_capacites');
            $table->string('activites_jean_monnet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('erasmus_infos');
    }
}
