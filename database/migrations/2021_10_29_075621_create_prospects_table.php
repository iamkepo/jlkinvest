<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('ref')->unique()->nullable();
            $table->string('designation')->unique();
            $table->string('email')->unique();
            $table->string('tel')->nullable();
            $table->string('csp')->nullable();
            $table->string('pays');
            $table->string('ville');
            $table->string('rue')->nullable();
            $table->string('carré/lot')->nullable();
            $table->string('Maison')->nullable();
            $table->string('profession')->nullable();
            $table->string('secteurAct')->nullable();
            $table->text('presentation')->nullable();
            $table->text('originProspect')->nullable();
            $table->text('potentielRelation')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamp('clientAt')->nullable();
            $table->boolean('ppe')->nullable()->default(0);
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
