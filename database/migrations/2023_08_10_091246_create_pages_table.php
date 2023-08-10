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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();

            $table->string('image');

            $table->text('sub_content_ru');
            $table->text('sub_content_uz');

            $table->text('content_ru')->nullable();
            $table->text('content_uz')->nullable();

            $table->string('meta_title_ru')->nullable();
            $table->string('meta_title_uz')->nullable();

            $table->text('meta_description_ru')->nullable();
            $table->text('meta_description_uz')->nullable();

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
        Schema::dropIfExists('pages');
    }
};
