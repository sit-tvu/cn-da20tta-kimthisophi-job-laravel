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
        Schema::create('nguoi_ung__tuyen', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('gioi_tinh');
            $table->date('ngay_sinh');
            $table->string('dia_chi');
            $table->string('trinh_do');
            $table->string('users_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nguoi_ung__tuyen');
    }
};
