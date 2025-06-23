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
        Schema::table('goods', function (Blueprint $table) {
            \DB::statement('ALTER TABLE `goods` CHANGE `stock_number` `stock_number` VARCHAR(30) NULL DEFAULT NULL;');
            $table->boolean('existance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};