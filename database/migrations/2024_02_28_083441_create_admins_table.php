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
        Schema::create('admins', function (Blueprint $table) {
             $table->bigIncrements('admin_id');
             $table->string('photo');
             $table->string('nickname');
              $table->string('name');
        $table->string('lastname');
        $table->string('jobs');
        $table->string('gender');
        $table->string('age');
        $table->string('address');
        $table->string('tel');
        $table->string('image_path')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
