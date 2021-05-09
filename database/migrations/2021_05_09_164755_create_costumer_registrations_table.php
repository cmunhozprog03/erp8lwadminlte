<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumerRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('costumer_id')->constrained()->cascadeOnDelete();

            $table->string('status')->nullable();
            $table->string('status_date')->nullable();
            $table->string('status_reason')->nullable();
            $table->string('special_status')->nullable();
            $table->string('special_status_date')->nullable();
            
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
        Schema::dropIfExists('costumer_registrations');
    }
}
