<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email_templates')->insert([
            'name' => 'Forgot password',
            'subject' => 'Forgot password',
            'action' => 'forgot_password',
            'body' => '<h3>
                            <em>Dear {USER_NAME},</em></h3>
                        <p>
                            <em>Greeetings of the Day..<br />
                            <br />
                            <br />
                            Please follow the link to reset your password.</em></p>
                        <p>
                            <em><strong><a href="{FORGOT_PASSWORD_LINK}">Click here</a></strong><br />
                            <br />
                            OR<br />
                            <br />
                            Copy below URL in your browser.<br />
                            <strong>{LINK}</strong></em></p>
                        <em><strong>Thanks</strong></em><br />',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
