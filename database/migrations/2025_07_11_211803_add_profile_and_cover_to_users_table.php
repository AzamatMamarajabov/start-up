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
        Schema::table('users', function (Blueprint $table) {
            $table->text('biography')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('profile_image')->nullable()->default('uploads/profiles/default-profile.jpg');
            $table->string('cover_image')->nullable()->default('uploads/profiles/default-cover.jpg');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'biography',
                'phone',
                'gender',
                'profile_image',
                'cover_image'
            ]);
        });
    }
};
