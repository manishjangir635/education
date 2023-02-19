<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailAction extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data=[[
            'action' => 'registration',
            'name' => 'Register',
            'options' => 'USER_NAME,LINK,FORGOT_PASSWORD_LINK',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],[
            'action' => 'forgot_password',
            'name' => 'Forgot Password',
            'options' => 'USER_NAME,LINK,FORGOT_PASSWORD_LINK',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]];
        DB::table('email_actions')->insert($data);
    }
}
