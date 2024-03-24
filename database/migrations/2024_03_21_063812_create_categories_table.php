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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nameEng');
            $table->string('nameInd');
            $table->string('groupEng');
            $table->string('groupInd');
            $table->string('nameSlug')->unique();
            $table->string('groupSlug');
            $table->text('descriptionEng')->nullable();
            $table->text('descriptionInd')->nullable();
            $table->string('homeThumbnailUrl')->nullable();
            $table->string('nameThumbnailUrl')->nullable();
            $table->string('groupThumbnailUrl')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
