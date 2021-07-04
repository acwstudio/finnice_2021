<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateAdminUnitTranslationsTable
 */
class CreateAdminUnitTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_unit_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_unit_id');
            $table->string('locale')->index();

            $table->string('title');
            $table->text('text');
            $table->string('capital');
            $table->string('slug');

            $table->unique(['admin_unit_id', 'locale']);
            $table->foreign('admin_unit_id')->references('id')->on('admin_units')->onDelete('cascade');
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
        Schema::dropIfExists('admin_unit_translations');
    }
}
