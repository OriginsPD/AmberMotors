<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmberPayLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('amber_pay_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees','employee_id');
            $table->foreignId('rent_id')->constrained('rentals','id');
            $table->bigInteger('fee_paid');
            $table->float('percentage_earn');
            $table->date('date_logged');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('amber_pay_logs');
    }
}
