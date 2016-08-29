<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Admin::create([
                'username' => 'admin',
                'password' => md5('admin'),
                'email' => '710801583@qq.com',
        ]);
    }
}
