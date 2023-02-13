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
        //
        Schema::create("Boards", function(Blueprint $table){
            $table->id()->index();
            $table->string("name");
            $table->string("comment")->nullable();
            $table->integer("moderators");
            $table->integer("vicmod")->nullable();
            $table->timestamps();
        } 
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists("Boards");
    }
};
