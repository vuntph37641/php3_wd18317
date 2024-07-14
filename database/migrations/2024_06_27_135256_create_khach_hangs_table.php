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
        Schema::create('khach_hangs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_khach_hang',10)->unique();
            //unique du lieu ko ddc phep trung nhau
            $table->string('ten_khach_hang',100);
            //nullable cho phep gia tri null
            $table->string('so_dien_thoai',9);
            $table->date('tuoi');
            $table->boolean('trang_thai')->default(0);
            //default xet gia tri mac dinh
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khach_hangs');
    }
};
