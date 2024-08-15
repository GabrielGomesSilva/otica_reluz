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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('OS');
            $table->date('purchase_date');
            $table->date('delivery_date');
            $table->string('customer_name');
            $table->string('address');
            $table->string('contact');
            $table->string('lens_type');
            $table->string('frame');
            $table->string('payment_method');
            $table->decimal('value', 8, 2);
            $table->text('obs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
