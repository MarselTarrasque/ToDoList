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
        Schema::create('user_projects', function (Blueprint $table) {
            $table->id('id_user_project'); // Или $table->increments('id_user_project'); если Laravel < 8
            $table->unsignedBigInteger('id_user'); // или $table->integer('id_user')->unsigned(); если Laravel < 8
            $table->unsignedBigInteger('id_project'); // или $table->integer('id_project')->unsigned(); если Laravel < 8
            $table->timestamps();

            // Внешние ключи
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_project')->references('id')->on('projects')->onDelete('cascade');

            // Индексы для ускорения запросов (опционально, но рекомендуется)
            $table->index('id_user');
            $table->index('id_project');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_projects');
    }
};
