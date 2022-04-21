<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('szakdoga', function (Blueprint $table) {
            $table->id();
            $table->string("szakdoga_nev");
            $table->string("githublink");
            $table->string("oldallink");
            $table->string("tagokneve");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('szakdogas');
    }
};