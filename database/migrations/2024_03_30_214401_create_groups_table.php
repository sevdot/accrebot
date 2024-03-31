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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("tenant_id");
            $table->string("openid");
            $table->string("name")->comment("名称");
            $table->decimal("fee_rate",4)->default(1)->comment("费率");
            $table->decimal("exchange_rate",4)->default(1)->comment("汇率");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
