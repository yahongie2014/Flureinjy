<?php

use Illuminate\Database\Seeder;

class OrderTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
         'order_way'=>'on phone',
         'sales_person'=>'kamatcho',
         'client_name'=>'crazy',
         'phone'=>'777777777',
         'mobile'=>'7676767676',
         'email'=>'kamatcho@gmail.com',
         'client_id'=>'9',
         'address'=>'lklklk',
         'order_type'=>'cage',
         'flower_type'=>'rose',
         'flower_color'=>'blue',
         'flower_budget'=>'33',
         'extra_name'=>'kfoekfe',
         'extra_type'=>'fkoekfoe',
         'amount'=>'984984',
         'extra_budget'=>'9849384',
         'delivery_name'=>'oekfoekf',
         'delivery_phone'=>'ofekofe',
         'delivery_address'=>'fpefe',
         'delivery_notes'=>'fkeofkeo',
         'delivery_budget'=>',foekfe',
         'message_card'=>'fkeiofkei',
         'notes'=>'fekofke',
         'budget'=>'ofekofek',
         'amount_paid'=>'982984924',
         'method'=>'ofekeokfeo',
         'remain'=>'lpefle',

        ]);
    }
}
