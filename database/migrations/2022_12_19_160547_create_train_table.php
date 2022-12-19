<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 150);
            $table->string('stazione_di_partenza', 200);
            $table->string('stazione_di_arrivo', 200);
            $table->time('ora_di_arrivo', $precision = 2);
            $table->time('ora_di_partenza', $precision = 2);
            $table->string('codice_treno');
            $table->integer('n_carrozza') -> nullable();
            $table->boolean('in_orario')-> nullable();
            $table->boolean('cancellato')-> nullable();
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
        Schema::dropIfExists('train');
    }
};
