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
        Schema::create('nutrition_facts', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('ingredient_id');
        $table->float('calories')->nullable();
        $table->float('protein')->nullable();
        $table->float('fat')->nullable();
        $table->float('carbohydrates')->nullable();
        $table->float('fiber')->nullable();
        $table->float('sugar')->nullable();
        $table->float('sodium')->nullable();
        $table->timestamps();

        $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade');
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nutrition_facts');
    }
};
