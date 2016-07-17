<?php

use Illuminate\Database\Seeder;

class CustomerTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name' => 'kamatcho',
            'phone'=>'010101010101',
            'mobile'=>'11111111111',
            'client_id'=>'84848484',
            'email'=>'fakes@fakes.com',
            'address'=>'some place'

        ]);
    }
}
