<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservoirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservoirs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('update_time')->nullable();
            $table->string('muc_nuoc')->nullable();
            $table->string('luu_luong')->nullable();
            $table->string('tong_luong_xa')->nullable();
            $table->string('tong_luong_xa_dap_tran')->nullable();
            $table->string('tong_luong_xa_nha_may')->nullable();
            $table->integer('xa_sau')->nullable();
            $table->integer('xa_mat')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservoirs');
    }
}
