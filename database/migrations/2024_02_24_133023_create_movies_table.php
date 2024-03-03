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
    Schema::create('movies', function (Blueprint $table) {
        $table->bigIncrements('movie_id'); // แก้ไขเป็น bigIncrements
        $table->string('title', 80);
        $table->string('poster')->nullable();
        $table->text('synopsis');
        $table->string('genres');
        $table->string('duration');
        $table->string('director');
        $table->string('cast');
        $table->string('trailer')->nullable();
        $table->text('reviews')->nullable();
        $table->timestamps();
    });
}



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
