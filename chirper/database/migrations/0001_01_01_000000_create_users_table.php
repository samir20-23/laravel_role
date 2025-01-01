<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Store the user's name
            $table->string('email')->unique(); // Store the user's email
            $table->string('password'); // Store the hashed password
            $table->enum('role', ['admin', 'user'])->default('user'); // Store the role, default to 'user'
            $table->rememberToken(); // For "remember me" functionality
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('users'); // Drop the users table if we rollback the migration
    }
}
