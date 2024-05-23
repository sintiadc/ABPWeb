<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_resep', function (Blueprint $table) {
            $table->id();
            $table->string('Tipe');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->foreignId('id_resep')->constrained('reseps')->onDelete('cascade');
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
        Schema::dropIfExists('my_resep');
    }
}