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
        Schema::create('body_mass_indices', function (Blueprint $table) {
            $table->id();
//            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('user_id')->constrained();
            $table->double('weight', 4, 1)->nullable();
            $table->double('height', 3, 2)->nullable();
            $table->double('value', 4, 2)->nullable();
            $table->string('description',255)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_mass_indeces');
    }
};
