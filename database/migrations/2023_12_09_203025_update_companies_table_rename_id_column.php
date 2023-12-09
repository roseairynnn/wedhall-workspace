<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCompaniesTableRenameIdColumn extends Migration
{
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->renameColumn('id', 'companyid');
        });
    }

    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->renameColumn('companyid', 'id');
        });
    }
}
