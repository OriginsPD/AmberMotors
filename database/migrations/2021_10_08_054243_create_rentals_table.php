<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users','id');
            $table->foreignId('employee_id')->constrained('employees','employee_id')->onUpdate('cascade');
            $table->foreignId('bike_id')->constrained('bike_details','id')->onDelete('cascade');
            $table->integer('payment_fee');
            $table->boolean('payment_status')->default(0);
            $table->boolean('rent_status')->default(0);
            $table->date('rental_start_date');
            $table->date('rental_end_date');
            $table->date('return_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
}
