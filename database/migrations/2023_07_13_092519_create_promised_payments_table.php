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
        Schema::create('promised_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('deal_id')->unique();
            $table->decimal('amount', 8, 2);
            $table->date('deadline'); 
            $table->date('payed_at')->nullable();     
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promised_payments');
    }
};
