<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostumerContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumer_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('costumer_id')->constrained()->cascadeOnDelete();

            $table->enum('contact_main', [1, 2])->default(1);
            $table->string('name')->nullable();
            $table->string('sector')->nullable();
            $table->string('e-mail')->nullable();
            $table->string('phone')->nullable();
            $table->string('phone_branch')->nullable();
            $table->string('mobile')->nullable();
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
        Schema::dropIfExists('costumer_contacts');
    }
}
