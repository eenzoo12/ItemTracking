<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serial_code');
            $table->integer('item_id');
            $table->integer('qty');
            $table->integer('transfer');
            $table->integer('receive');
            $table->integer('area');
            $table->integer('flow');
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
        Schema::dropIfExists('item_records');
    }
}
