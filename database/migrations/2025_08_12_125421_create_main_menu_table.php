<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('main_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('main_menu_category_id')->index();
            $table->foreign('main_menu_category_id')->references('id')->on('main_menu_category');
            $table->string('serial_no')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->text('ingredient')->nullable();
            $table->integer('spicy_category_id')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_menu');
    }
};
