<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

     //adds the user type column to the users table
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('user_type')->after('password')->default('user');
        });
    }
    
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
