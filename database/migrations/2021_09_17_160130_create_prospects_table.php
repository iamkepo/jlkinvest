<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->unique();
            $table->string('email');
            $table->string('telephone1');
            $table->string('telephone2')->nullable();
            $table->string('csp');
            $table->string('pays');
            $table->string('ville');
            $table->string('rue')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('profession');
            $table->string('secteurActivite');
            $table->string('societe')->nullable();
            $table->text('presentation');
            $table->text('originProspect');
            $table->text('potentielRelation')->nullable();
            $table->dateTime('clientAt')->nullable();
            $table->boolean('ppe');
            $table->string('pieceIdentite')->nullable();
            $table->string('numerosPieceIdentite')->nullable();
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('prospects');
    }
}
