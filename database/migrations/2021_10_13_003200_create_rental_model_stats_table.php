<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalModelStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('rental_model_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bike_id')->constrained('bike_details','id');
            $table->integer('total')->autoIncrement();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_model_stats');
    }
}
