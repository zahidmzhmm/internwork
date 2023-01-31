<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('destination');
            $table->string('program');
            $table->string('duration');
            $table->string('reference')->unique();
            $table->string('fees');
            $table->string('us_visa');
            $table->string('travel_exp');
            $table->string('picture')->nullable();
            $table->integer('applicable_id');
            $table->string('applicable_name');
            $table->string('applicable_start');
            $table->string('applicable_end');
            $table->string('applicable_deadline');
            $table->string('payment_method');
            $table->string('payment_status')->default('due');//due and paid
            $table->string('approve_status')->default('pending');
            $table->string('status')->default('open');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
