<?php

use Illuminate\Database\Seeder;

class ExpandTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expand')->insert([
            'supplier_name' => 'kamatcho',
            'employee'=>'crazy',
            'notes'=>'This Is Notes',
            'amount'=>'1871',
            'method'=>'cash',

        ]);
    }
}
