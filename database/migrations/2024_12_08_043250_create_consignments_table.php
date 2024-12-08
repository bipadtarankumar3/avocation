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
        Schema::create('consignments', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->nullable();
            $table->string('consignment_type')->nullable();
            $table->string('form_type')->nullable();
            $table->string('dispatch_id')->nullable();
            $table->string('appointment')->nullable();
            $table->text('logistic_name')->nullable();
            $table->string('client_name')->nullable();
            $table->string('no_of_cn')->nullable();
            $table->string('total_package')->nullable();
            $table->string('package_type')->nullable();
            $table->string('total_weight')->nullable();
            $table->string('vehicle_number')->nullable();
            $table->string('condition')->nullable();
            $table->string('handling_cost_amount')->nullable();
            $table->string('other_employee')->nullable();
            $table->string('review_condition')->nullable();
            $table->text('picture')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->text('fetch_address')->nullable();
            $table->string('status')->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consignments');
    }
};
