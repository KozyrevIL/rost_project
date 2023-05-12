<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('page_blocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_page');
            $table->integer('pos')->nullable();
            $table->string('caption',500)->nullable();
            $table->string('description',1000)->nullable();
            $table->text('page_text')->nullable();
            $table->timestamp('date_text')->nullable();
            $table->boolean('visible')->nullable();
            $table->string('item')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_blocks');
    }
};
