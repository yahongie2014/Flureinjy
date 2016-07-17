<?php

use Illuminate\Database\Seeder;

class SupplierTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier')->insert([
            'supplier' => 'kamatcho',
            'phone' => '010101010',
            'mobile' => '012010202020',
            'address' => 'great street at awesome country',
            'email' =>'kamatcho@gmail.com',
            'supplier_id' =>'98989',
        ]);
    }
}
