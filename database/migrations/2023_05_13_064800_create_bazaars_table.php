<?php

use App\Models\User;
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
        Schema::create('bazaars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("name");
            $table->string("description");
            $table->string("location");
            $table->string("price_estimation");
            $table->date("starts_from");
            $table->date("ends_at");
            $table->string("syarat_ketentuan");
            $table->integer("slot");
            $table->string("logo");
            $table->string("payment")->default("Unpaid");
            $table->foreignIdFor(User::class);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bazaars');
    }
};
