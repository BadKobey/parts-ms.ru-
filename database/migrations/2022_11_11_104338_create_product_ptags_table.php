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
        Schema::create('product_ptags', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('ptag_id');

            $table->timestamps();
            //idx
            $table->index('product_id', 'product_ptag_product_idx');
            $table->index('ptag_id', 'product_ptag_ptag_idx');
            //fk
            $table->foreign('product_id', 'product_ptag_product_fk')->on('products')->references('id');
            $table->foreign('ptag_id', 'product_ptag_ptag_fk')->on('ptags')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_ptags');
    }
};
