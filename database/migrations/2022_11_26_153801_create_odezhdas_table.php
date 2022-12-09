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
        Schema::create('odezhda', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('type_id')->constrained('odezhda_types')->cascadeOnDelete();
            $table->text('description');
            $table->text('brand');
            $table->foreignId('facturer_id')->constrained('odezhda_facturers')->cascadeOnDelete();
            $table->foreignId('color_id')->constrained('odezhda_colors')->cascadeOnDelete();
            $table->integer('value');
            $table->foreignId('form_type_id')->constrained('odezhda_forms')->cascadeOnDelete();
            $table->text('size_info');
            $table->text('image');
            $table->integer('price');
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
        Schema::dropIfExists('odezhda');
    }
};
