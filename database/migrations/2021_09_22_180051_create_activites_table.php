<?php

use App\Models\User;
use App\Models\Prospect;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activites', function (Blueprint $table) {
            $table->id();
            $table->string('typeActivity');
            $table->string('reference');
            $table->dateTime('dateEcheance');
            $table->text('resume')->nullable();
            $table->text('title')->nullable();
            $table->string('observation')->nullable();
            $table->string('besoinDuClient')->nullable();
            $table->double('objectifDeCollecte')->nullable();
            $table->double('ressourceCollecte')->nullable();
            $table->text('produitsCom')->nullable();
            $table->text('actionEntreprendre')->nullable();
            $table->string('statut')->nullable();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Prospect::class)->constrained();
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
        Schema::dropIfExists('activites');
    }
}
