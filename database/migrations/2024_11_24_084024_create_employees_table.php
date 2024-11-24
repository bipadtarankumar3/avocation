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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('emp_company_id')->nullable();
            $table->string('emp_type')->nullable();
            $table->string('emp_code')->nullable();
            
            $table->string('emp_name')->nullable();
            $table->string('emp_location')->nullable();
            $table->string('emp_branch')->nullable();
            $table->string('emp_function')->nullable();
            $table->string('emp_phone')->nullable();
            $table->string('emp_email')->nullable();
            $table->string('emp_fm_vehicle_no')->nullable();
            $table->date('emp_dl_date')->nullable();
            
            $table->text('emp_selfie')->nullable();
            $table->text('emp_aadhar')->nullable();
            $table->text('emp_pan')->nullable();
            $table->text('emp_photo')->nullable();
            $table->text('emp_document')->nullable();
            $table->string('emp_status')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
