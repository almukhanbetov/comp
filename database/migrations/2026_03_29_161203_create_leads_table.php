<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->string('type'); // service | course
            $table->unsignedBigInteger('entity_id')->nullable();

            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('source')->default('site'); // site, react, expo, whatsapp
            $table->string('status')->default('new'); // new, in_progress, done, canceled

            $table->string('title')->nullable(); // название услуги/курса на момент заявки
            $table->text('message')->nullable();

            $table->text('whatsapp_url')->nullable();
            $table->ipAddress('ip')->nullable();
            $table->text('user_agent')->nullable();

            $table->timestamps();

            $table->index(['type', 'entity_id']);
            $table->index('status');
            $table->index('source');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};