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
            $table->number('genderId');
            $table->string('resAddress');
            $table->string('town');
            $table->string('homeTown');
            $table->number('regionId');
            $table->number('occupationId');
            $table->number('phoneNumber');
            $table->boolean('isActive');
            $table->string('nextOfKin');
            $table->number('relationId');
            $table->number('kinNumber');
            $table->number('nationalityId');
            $table->number('religionId');
            $table->string('placeOfWorship');
            $table->number('identityTypeId');
            $table->string('idNumber');
            $table->string('image');
            $table->number('branchId');
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
