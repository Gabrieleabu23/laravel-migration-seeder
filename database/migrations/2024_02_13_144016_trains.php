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
    public function up(){
        Schema::create("trains", function (Blueprint $table) {    
            $table->id();
            $table->string("azienda");
            $table->string("stazione_partenza");
            $table->string("stazione_arrivo");
            $table->date("ora_partenza");
            $table->date("ora_arrivo");
            $table->string('codice_treno')-> unique();
            $table->integer('carozze_treno');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
