<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('priority')->default('Normal');
            $table->string('status')->default('aberto');
            $table->string('requester');
            $table->foreignId('team_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('workflow_stage_id')->nullable()->constrained()->nullOnDelete();
            $table->dateTime('due_at')->nullable();
            $table->timestamps();
        });

        Schema::create('ticket_skill', function (Blueprint $table) {
            $table->foreignId('ticket_id')->constrained()->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->primary(['ticket_id', 'skill_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ticket_skill');
        Schema::dropIfExists('tickets');
    }
};
