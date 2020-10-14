<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePremieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('premieres', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start', 0);
            $table->dateTime('end', 0);
            $table->boolean('available')->default(true);
            $table->enum('type', ['Mañana', 'Tarde', 'Noche']);
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
        Schema::dropIfExists('premieres');
    }
}
