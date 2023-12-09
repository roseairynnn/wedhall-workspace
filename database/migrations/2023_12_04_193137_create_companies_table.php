<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('companyid'); // Use bigIncrements for auto-incrementing primary key
            $table->string('companyname');
            $table->string('companyregistrationNo');
            $table->string('companynophone');
            $table->string('companyemail')->default('')->nullable();            
            $table->text('companyaddress');
            $table->string('companyzip');
            $table->string('companycity');
            $table->string('companystate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
