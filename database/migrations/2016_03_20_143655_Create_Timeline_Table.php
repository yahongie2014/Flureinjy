<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_line', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->string('order_way');
            $table->string('sales_person');
            $table->string('client_name');
            $table->integer('phone');
            $table->integer('mobile');
            $table->string('email');
            $table->integer('client_id');
            $table->text('address');
            $table->string('order_type');
            $table->string('flower_type');
            $table->string('flower_color');
            $table->integer('flower_budget');
            $table->string('extra_name');
            $table->string('extra_type');
            $table->integer('amount');
            $table->integer('extra_budget');
            $table->string('delivery_name');
            $table->integer('delivery_phone');
            $table->text('delivery_address');
            $table->text('delivery_notes');
            $table->integer('delivery_budget');
            $table->text('message_card');
            $table->text('notes');
            $table->string('pickup_date');
            $table->string('pickup_time');
            $table->string('pickup_budget');
            $table->string('ontime');
            $table->string('ontime_budget');
            $table->integer('budget');
            $table->integer('amount_paid');
            $table->string('method');
            $table->integer('remain');

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
        Schema::drop('time_line');

    }
}
