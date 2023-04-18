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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('firstname', 255)->after('id')->default('');
            $table->string('lastname', 255)->after('firstname')->default('');
            $table->integer('age')->nullable()->after('email');
            $table->double('height', 3, 2)->nullable()->after('age');
            $table->double('weight', 3, 1)->nullable()->after('height');
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
