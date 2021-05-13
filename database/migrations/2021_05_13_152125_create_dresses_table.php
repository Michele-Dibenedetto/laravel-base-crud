<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->id();
            $table->string("taglia", 10);
            $table->string("tipo", 20);
            $table->string("colore", 30);
            $table->string("sesso", 10);
            $table->float("costo", 6, 2);
            $table->string("marca", 50);
            $table->text("immagine");
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
        Schema::dropIfExists('dresses');
    }
}
