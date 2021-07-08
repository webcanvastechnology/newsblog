<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tbl_admin')->insert([
            'admin_name' =>'Admin',
            'email_address' =>'admin@gmail.com',
            'password' => md5('123456'),
            'mobile' => '8250602637',
            'acc_label' => '1',
        ]);
    }
}
