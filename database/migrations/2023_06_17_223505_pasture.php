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
        Schema::create('pastures', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('name_mean');
            $table->string('price');
            $table->string('style');
            $table->string('user_id');
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
