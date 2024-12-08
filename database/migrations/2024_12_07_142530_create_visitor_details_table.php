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
            Schema::create('visitor_details', function (Blueprint $table) {
                $table->id();
                $table->date('date_of_visit')->nullable();
                $table->text('client_company_name')->nullable();
                $table->text('address')->nullable();
                $table->text('contact_person_name')->nullable();
                $table->text('designation')->nullable();
                $table->string('phone_number')->nullable();
                $table->string('office_phone_number')->nullable();
                $table->string('zone_area')->nullable();
                $table->text('visit_card')->nullable();
                $table->text('comments')->nullable();
                
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
        Schema::dropIfExists('visitor_details');
    }
};
