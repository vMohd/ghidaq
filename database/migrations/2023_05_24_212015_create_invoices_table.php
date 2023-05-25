<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->default(1);
            $table->string('invoice_id', 8)->unique();
            $table->string('user_email')->references('email')->on('users')->onDelete('cascade');
            $table->string('order_itemId');
            $table->string('order_itemName');
            $table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->decimal('price', 8, 2);
            $table->decimal('total', 8, 2);
            $table->string('promoCode')->nullable();
            $table->decimal('promoCodeValue', 8, 2)->nullable();
            $table->date('date');
            $table->timestamps();
        });

        $orders = \App\Models\Invoice::all();
        foreach ($orders as $index => $order) {
            $order->order_id = $index + 1;
            $order->save();
    }
}

    public function down(): void
    {
        Schema::dropIfExists('invoices');
        //Schema::dropForeign(['user_email']);
    }
};
