<?php

use Illuminate\Database\Seeder;

class OrderStatusTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_status')->insert([
            'order_status' => 'pending',

        ]);
    }
}
