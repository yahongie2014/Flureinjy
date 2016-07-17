<?php

use Illuminate\Database\Seeder;

class OrdertypeTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_type')->insert([
            'order_type' => 'kamatcho',
            'options'=>'chocolate-tobaco'

        ]);
    }
}
