<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('user_role_id')->comment('1=admin,2=user')->default('2');
            $table->integer('is_student')->default(1);
            $table->integer('is_teacher')->default(0);
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->integer('mobile_number')->nullable();
            $table->string('password');
            $table->integer('is_mobile_verified')->default('0');
            $table->integer('is_email_verified')->default('0');
            $table->integer('is_active')->default('0');
            $table->text('image')->nullable();
            $table->string('forgot_password_validate_string')->nullable();
            $table->longText('description')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
