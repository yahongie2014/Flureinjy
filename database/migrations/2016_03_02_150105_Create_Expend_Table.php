<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expand', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier_name');
            $table->string('employee');
            $table->text('notes');
            $table->integer('amount');
            $table->string('method');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('expand');

    }
}
