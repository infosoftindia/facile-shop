<?php

use Facile\Database\Migrations\Blueprint;
use Facile\Database\Migrations\Schema;

class CreateUsersTable
{
    /**
     * Migrate the table.
     *
     * @throws Exception
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            return $table;
        });
    }

    /**
     * Drop the table.
     *
     * @throws Exception
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}