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
            $table->string('title');
            $table->string('surname');
            $table->string('othernames');
            $table->date('dob');
            $table->integer('genderId');
            $table->string('resAddress');
            $table->string('town');
            $table->string('homeTown');
            $table->integer('regionId');
            $table->integer('occupationId');
            $table->integer('phoneNumber');
            $table->boolean('isActive');
            $table->string('nextOfKin');
            $table->integer('relationId');
            $table->integer('kinNumber');
            $table->integer('nationalityId');
            $table->integer('religionId');
            $table->string('placeOfWorship');
            $table->integer('identityTypeId');
            $table->string('idNumber');
            $table->string('image');
            $table->integer('branchId');
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
