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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("pages");
            $table->string("IBN");
            $table->string("category");
            $table->string("publisher");
            $table->integer("published");
            $table->unsignedBigInteger("userID");
            $table->timestamps();

           $table->foreign("userId")->references("id")->on("users") ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
