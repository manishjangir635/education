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
            $table->integer('user_role_id')->comment('1=admin,2=restaurant,3=retailer,4=restaurant_chef,5=restaurant_server,6=restaurant_host,7=restaurant_cashier, 8=restaurant_food_prepration,9=restaurant_dinning_manager,10=restaurant_owner_manager,11=retailer_manager,12=retailer_cashier,13=retailer_clerk,14=retailer_deil_operator')->default('0');
            $table->integer('is_staff')->comment('1= restaurant , 2 = retailer')->default('0');
            $table->string('name');
            $table->string('username');
            $table->string('email')->unique();
            $table->integer('mobile_number');
            $table->string('password');
            $table->integer('employment_type')->comment('1= full_time , 2 = part_time')->default('0');
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
