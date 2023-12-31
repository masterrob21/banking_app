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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('clientNumber')->unique();
            $table->foreignId('titleId');
            $table->string('surname');
            $table->string('othernames');
            $table->date('dob');
            $table->foreignId('genderId');
            $table->string('resAddress');
            $table->string('town');
            $table->string('homeTown');
            $table->foreignId('regionId');
            $table->foreignId('occupationId');
            $table->string('phoneNumber');
            $table->boolean('isActive');
            $table->string('nextOfKin');
            $table->foreignId('relationId');
            $table->string('kinNumber')->nullable();
            $table->foreignId('nationalityId');
            $table->foreignId('religionId');
            $table->string('placeOfWorship');
            $table->foreignId('identityTypeId');
            $table->string('idNumber');
            $table->string('image')->nullable();
            $table->foreignId('branchId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
