<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_analytics', function (Blueprint $table) {
            $table->increments('id');
            $table->text('value');
            $table->unsignedInteger('property_id');
            $table->unsignedInteger('analytic_type_id');
            $table->timestamps();

            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');

            $table->foreign('analytic_type_id')
                ->references('id')
                ->on('analytic_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_analytics', function (Blueprint $table) {
            $table->dropForeign(['property_id']);
            $table->dropForeign(['analytic_type_id']);
        });

        Schema::dropIfExists('property_analytics');
    }
}
