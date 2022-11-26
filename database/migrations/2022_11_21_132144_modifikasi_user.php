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
        Schema::table('users', function (Blueprint $table) {

            //penambahan kolom
            $table->string('username');
            $table->string('address');
            $table->string('phone');
            $table->string('birthdate');
            $table->string('agama');
            $table->string('jenisKelamin');

            //edit kolom
            $table->renameColumn('name','fullname');
            $table->string('email')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
