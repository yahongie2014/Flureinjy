<?php

use Illuminate\Database\Seeder;

class FlowersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowers')->insert([
            'name' => 'crazy',
            'color'=>'white-green-red'

        ]);
    }
}
