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
        Schema::create('trafficsbs', function (Blueprint $table) {
            $table->id();
            $table->string('port_sb');
            $table->string('sent_sb');
            $table->string('received_sb');
            $table->string('total_sb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trafficsbs');
    }
};
