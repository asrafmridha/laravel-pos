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
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments("id");
            $table->date("date");
            $table->integer("branch_id");
            $table->string("company_name");
            $table->string("invoice")->nullable();
            $table->string("product_id");
            $table->float("discount");
            $table->float("discount_ammount");
            $table->float("total_ammount");
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
        Schema::dropIfExists('purchases');
    }
};
