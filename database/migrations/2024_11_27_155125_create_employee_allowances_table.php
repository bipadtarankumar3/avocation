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
        Schema::create('employee_allowances', function (Blueprint $table) {
            $table->id();
            $table->string('employee_name')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->decimal('esi', 10, 2)->nullable();
            $table->decimal('pf_deduction', 10, 2)->nullable();
            $table->decimal('ptax_deduction', 10, 2)->nullable();
            $table->enum('status', ['Draft', 'Publish'])->default('Draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_allowances');
    }
};
