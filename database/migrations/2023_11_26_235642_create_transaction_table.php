<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id');
            $table->decimal('value');
            $table->timestamps();
            $table->uuid('payer_id');
            $table->uuid('payee_id');
        
            $table->foreign('payer_id')->references('id')->on('users');
            $table->foreign('payee_id')->references('id')->on('users');
        });
    }

    public function down(): void {
        Schema::dropIfExists('transactions');
    }
};
