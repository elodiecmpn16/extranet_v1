<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('code_clt')->nullable();
            $table->string('adr1')->nullable();
            $table->string('adr2')->nullable();
            $table->string('cp')->nullable();
            $table->string('ville')->nullable();
            $table->string('rex')->nullable();
            $table->string('siret')->nullable();
            $table->string('tel')->nullable();
            $table->string('fax')->nullable();
            $table->string('groupe')->nullable();
            $table->string('type')->nullable();
            $table->string('dtmaj')->nullable();
            $table->string('cltgroupe')->nullable();
            $table->string('pagedefaut')->nullable();
            $table->string('tri')->nullable();
            $table->string('cdeweb')->nullable();
            $table->string('cdecolonne')->nullable();
            $table->string('ie')->nullable();
            $table->string('communaute')->nullable();
            $table->string('site')->nullable();
            $table->string('localite')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->rememberToken();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
