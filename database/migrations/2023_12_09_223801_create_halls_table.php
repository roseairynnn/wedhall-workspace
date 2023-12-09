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
        Schema::create('halls', function (Blueprint $table) {
            $table->bigIncrements('hallid'); // Use bigIncrements for auto-incrementing primary key

            // foreign key for table halls
            $table->unsignedBigInteger('companyid');
            $table->foreign('companyid')
                  ->references('companyid')
                  ->on('companies')
                  ->onDelete('cascade');
            
            $table->string('hallname');
            $table->string('halladdress');
            $table->string('hallzip');
            $table->string('hallcity');
            $table->string('hallstate');
            $table->string('halldescription');
            $table->string('hallcapacity');
            $table->string('hallprice');
            $table->string('hallimage1');
            $table->string('hallimage2');
            $table->string('hallimage3');
            $table->string('hallstatus');
            $table->string('halltype');
            
            // Convert the following columns to boolean
            $table->boolean('lightingsystem')->default(false);
            $table->boolean('audiovisualsystem')->default(false);
            $table->boolean('parkingfacilities')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halls');
    }
};
