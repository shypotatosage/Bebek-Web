<?php

use App\Models\BankType;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('bank_account_number');
            $table->foreignIdFor(BankType::class)->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('profile_picture');
            $table->string('role');
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('bank_type_id')->references('id')->on('bank_types')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
