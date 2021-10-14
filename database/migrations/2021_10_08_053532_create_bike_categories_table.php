<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('bike_categories', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('brand_id')->constrained('bike_brands','id')->onDelete('cascade')->onUpdate('cascade');
            $table->string('category_nm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('bike_categories');
    }
}
