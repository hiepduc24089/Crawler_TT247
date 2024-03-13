<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProvincesThirdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('provinces', function (Blueprint $table){
            $table->string('company_name')->nullable()->after('slug_area');
            $table->string('address')->nullable()->after('company_name');
            $table->string('phone')->nullable()->after('address');
            $table->string('fax')->nullable()->after('phone');
            $table->string('email')->nullable()->after('fax');
            $table->string('website')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('provinces', function (Blueprint $table) {
            $table->dropColumn(['company_name', 'address', 'phone', 'fax', 'email', 'website']);
        });
    }
}
