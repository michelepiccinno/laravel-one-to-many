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
        Schema::table('posts', function (Blueprint $table) {
            // $table->unsignedBigInteger("post_id")->nullable()->after("id");
            // $table->foreign("post_id")->references("id")->on("posts")->nullOnDelete();

            $table->foreignId('post_id')->nullable()->after("id")->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_post_id_foreign'); //elimina il vincolo e rende la colonna un normale intero
            $table->dropColumn('post_id'); //elimina la colonna
        });
    }
};