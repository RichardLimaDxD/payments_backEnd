<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf')->unique();
            $table->string('password');
            $table->string('type');
            $table->decimal('balance')->default(0);
            $table->timestamps();

            $table->primary('id');
        });
    }

    public function down(): void {
        Schema::dropIfExists('users');
    }
};
