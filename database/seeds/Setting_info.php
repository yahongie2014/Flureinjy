<?php

use Illuminate\Database\Seeder;

class Setting_info extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting_info')->insert([
            'mobile' => '01010101010',
            'phone' => '82882372837',
            'address' => 'great street at awesome country',
            'email' =>'kamatcho@gmail.com',
        ]);
    }
}
