<?php

use Illuminate\Database\Seeder;

class ExtrasTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->insert([
            'name' => 'crazy',
            'type'=>'birds-cage-ch'

        ]);
    }
}
