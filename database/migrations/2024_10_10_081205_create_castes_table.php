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
        Schema::create('castes', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_number')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('dob')->nullable();
            $table->string(column: 'category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('address')->nullable();
            $table->string('issu_date')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('castes');
    }
};
