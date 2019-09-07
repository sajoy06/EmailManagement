<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pin');
            $table->string('name');
            $table->string('password')->nullable();
            $table->string('username')->unique();
            $table->string('designation');
            $table->string('department');
            $table->string('company');
            $table->string('group');
            $table->string('alias');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('requestedBy')->nullable();
            $table->string('createdBy')->nullable();
            $table->integer('status');
            $table->integer('domain')->nullable();
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
        Schema::dropIfExists('requests');
    }
}
