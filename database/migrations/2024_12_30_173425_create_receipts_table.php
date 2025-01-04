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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('issuer_name', 200);
            $table->string('issuer_type', 1);
            $table->string('issuer_document', 20);
            $table->string('issuer_address', 200)->nullable();
            $table->string('issuer_complement', 200)->nullable();
            $table->string('issuer_reference', 200)->nullable();
            $table->string('issuer_city', 100)->nullable();
            $table->string('issuer_state', 2)->nullable();
            $table->string('issuer_zipcode', 8)->nullable();
            $table->string('issuer_telephone', 20)->nullable();
            $table->string('issuer_email', 100)->nullable();

            $table->string('payer_name', 200);
            $table->string('payer_type', 1);
            $table->string('payer_document', 20);
            $table->string('payer_address', 200)->nullable();
            $table->string('payer_complement', 200)->nullable();
            $table->string('payer_reference', 200)->nullable();
            $table->string('payer_city', 100)->nullable();
            $table->string('payer_state', 2)->nullable();
            $table->string('payer_zipcode', 8)->nullable();
            $table->string('payer_telephone', 20)->nullable();
            $table->string('payer_email', 100)->nullable();

            $table->dateTime('date');
            $table->decimal('value', 11, 2);
            $table->string('referent', 255);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
};
