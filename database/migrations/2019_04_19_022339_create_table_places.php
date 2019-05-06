<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('place', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("avatar");
            $table->string("address");
            $table->string("phone",12);
            $table->text("detail");
            $table->bigInteger("id_district");
            $table->bigInteger("id_category");
            $table->integer("view");
            $table->integer("review_score");
            $table->integer("reviews");
            $table->time("open");
            $table->time("close");
            $table->bigInteger("min_price");
            $table->bigInteger("max_price");
            $table->bigInteger("created_by");
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
        Schema::dropIfExists('table_places');
    }
}
