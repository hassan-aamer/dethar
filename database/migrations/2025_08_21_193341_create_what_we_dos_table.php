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
        Schema::create('what_we_dos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('what_we_do_category_id')->nullable()->constrained('what_we_do_categories')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->longText('content')->nullable();
            $table->boolean('active')->default(1);
            $table->integer('position')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('what_we_dos');
    }
};
