<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('bike_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('bike_categories','id');
            $table->foreignId('brand_id')->constrained('bike_brands','id');
            $table->foreignId('employee_nbr')->constrained('employees','id');
            $table->string('bike_model');
            $table->integer('rent_fee');
            $table->boolean('availability')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bike__details');
    }
}
