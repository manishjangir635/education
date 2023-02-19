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
            $table->integer('user_role_id')->comment('1=admin,2=teacher,3=student,4=both')->default('3');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->integer('mobile_number')->nullable();
            $table->string('password');
            $table->integer('is_mobile_verified')->default('0');
            $table->integer('is_email_verified')->default('0');
            $table->integer('is_active')->default('0');
            $table->longText('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();
            $table->text('image')->nullable();
            $table->string('device_id')->nullable();
            $table->string('social_id')->nullable();
            $table->string('validate_string')->nullable();
            $table->string('forgot_password_validate_string')->nullable();
            $table->string('social_account_type')->nullable();
            $table->integer('email_notifications')->nullable();
            $table->integer('website_notifications')->nullable();
            $table->integer('push_notification')->nullable();
            $table->integer('first_time_login')->comment('0=firsttime,1=completed profile')->default('0');
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
