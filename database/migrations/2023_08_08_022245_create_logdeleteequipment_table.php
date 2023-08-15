<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logdeleteequipment', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->text('specifications');
            $table->string('merek');
            $table->date('year');
            $table->unsignedBigInteger('unit_id');
            $table->timestamp('tanggal_delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logdeleteequipment');
    }
};
