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
        Schema::create('accounts', function (Blueprint $table) {
            // $table->id("Acc_Id");
            $table->uuid('Acc_Id')->unique();
            $table->string("Name", 255);
            $table->string("Acc_type", 255);
            $table->string("Mobile_No", 11);
            $table->integer("Opening_Balance");
            $table->string("Address", 500);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
