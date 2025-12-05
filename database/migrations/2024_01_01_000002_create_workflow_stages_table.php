<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('workflow_stages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('order')->default(0);
            $table->string('color')->default('#0ea5e9');
            $table->unsignedInteger('sla_minutes')->default(240);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('workflow_stages');
    }
};
