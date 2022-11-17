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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('code');
            $table->integer('price');
            $table->integer('count');
            $table->unsignedBigInteger('pcategory_id')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();

            $table->index('pcategory_id', 'product_pcategory_idx');
            $table->foreign('pcategory_id', 'product_pcategory_fk')->on('pcategories')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
