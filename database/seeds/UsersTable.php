<?php

use Illuminate\Database\Seeder;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'expenses',
            'email' => 'expenses@expenses.com',
            'password' => bcrypt(123),
            'role'=>'expenses'

        ]);
    }
}
