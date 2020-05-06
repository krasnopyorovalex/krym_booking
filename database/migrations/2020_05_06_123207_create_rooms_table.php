<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('rooms', static function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('room_category_id', 36);
            $table->string('name');
            $table->unsignedMediumInteger('order');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('room_category_id')->references('id')->on('room_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
}
