<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('reservationid');
            $table->unsignedBigInteger('hallid');
            $table->foreign('hallid')
                  ->references('hallid')
                  ->on('halls')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('id');
            $table->foreign('id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->unsignedBigInteger('companyid');
            $table->foreign('companyid')
                  ->references('companyid')
                  ->on('companies')
                  ->onDelete('cascade');
            $table->string('reservationstartdate');
            $table->string('reservationenddate');
            $table->string('reservationdays');
            $table->string('reservationstarttime');
            $table->string('reservationendtime');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
