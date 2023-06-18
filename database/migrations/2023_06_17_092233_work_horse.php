<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('work_horse', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('distance');
            $table->string('color');
            $table->string('gender');
            $table->string('growth');
            $table->string('ground');
            $table->string('speed');
            $table->string('strength');
            $table->string('moment');
            $table->string('stamina');
            $table->string('condition');
            $table->string('health');
            $table->string('price');
            $table->string('parent');
            $table->string('father');
            $table->string('mother');
            $table->string('grand_parent');
            $table->string('grand_father');
            $table->string('grand_mother');
            $table->string('user_id');
            $table->string('pasture_id');
            $table->string('etc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
