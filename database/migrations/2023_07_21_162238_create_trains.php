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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('operated_by', 30);
            $table->string('departs_from', 30);
            $table->string('arrives_to', 30);
            $table->timestamps('departure_time');
            $table->timestamps('arrival_time');
            $table->string('train_code', 10);
            $table->smallInteger('q_coach', 3);
            $table->tinyInteger('delayed', 1);
            $table->tinyInteger('canceled', 1);
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
        Schema::dropIfExists('trains');
    }
};
