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
        Schema::create('outcomes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("tenant_id");
            $table->bigInteger("group_id");
            $table->bigInteger("operator_id");
            $table->decimal("money",2);
            $table->decimal("fee_rate",2);
            $table->decimal("exchange_rate",2);
            $table->decimal("amount",2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outcomes');
    }
};
