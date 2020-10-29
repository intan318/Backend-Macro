<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_material', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('material_code');
            $table->string('material_name');
            $table->string('material_brand');
            $table->string('material_grade');
            $table->double('material_size');
            $table->string('material_unit');
            $table->integer('seller_id')->nullable();
            $table->integer('category_id');
            
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
        Schema::dropIfExists('table_material');
    }
}
