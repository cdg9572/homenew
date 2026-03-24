<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('contacts')) {
            return;
        }

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('company', 255);
            $table->string('contact_person', 100);
            $table->string('email', 255);
            $table->json('services');
            $table->string('current_site', 2048)->nullable();
            $table->text('message')->nullable();
            $table->string('budget', 500)->nullable();
            $table->json('attachments')->nullable();
            $table->string('status', 32)->default('접수');
            $table->text('admin_memo')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
