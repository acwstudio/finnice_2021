<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateAdminUnitsTable
 */
class CreateAdminUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_units', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->nullable();
            $table->string('alias')->unique();
            $table->float('population', 8, 2)->nullable();
            $table->decimal('area', 8, 2)->nullable();
            $table->string('image_name');
            $table->string('image_extension');
            $table->string('image_arms_name');
            $table->string('image_arms_extension');
            $table->string('image_maps_name');
            $table->string('image_maps_extension');
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
        Schema::dropIfExists('admin_units');
    }
}
