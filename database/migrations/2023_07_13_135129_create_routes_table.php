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
        Schema::create('routes', function (Blueprint $table) {
            $table -> id();

            $table -> string('azienda', 30);
            $table -> string('stazione_partenza', 50);
            $table -> string('stazione_arrivo', 50);
            $table -> dateTime('orario_partenza');
            $table -> dateTime('orario_arrivo');
            $table -> string('codice', 15) -> unique();
            $table -> integer('n_carrozze') -> default(1);
            $table -> boolean('in_orario') -> default(true);
            $table -> boolean('cancellato', 10) -> default(false);

            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};
