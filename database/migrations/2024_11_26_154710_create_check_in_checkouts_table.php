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
        Schema::create('check_in_checkouts', function (Blueprint $table) {
            $table->id();
            $table->integer('ckn_user_id')->nullable();
            $table->string('ckn_phone_no')->nullable();
            $table->string('ckn_selfie')->nullable();
            $table->integer('ckn_otp')->nullable(); 
            $table->string('ckn_lat')->nullable();
            $table->string('ckn_long')->nullable();
            $table->string('ckn_place')->nullable();
            $table->date('ckn_date')->nullable();
            $table->string('ckn_in_out_status')->nullable();
            $table->string('ckn_status')->default('pending')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_in_checkouts');
    }
};
