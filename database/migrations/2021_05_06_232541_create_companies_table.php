<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            

            $table->string('social_name')->unique();
            $table->string('fantasy_name');
            $table->string('cnpj');
            $table->string('ie');
            $table->string('im');
            $table->string('address');
            $table->string('address_number');
            $table->string('address_complement')->nullable();
            $table->string('address_district');
            $table->string('address_city');
            $table->string('address_state');
            $table->string('e-mail');
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('slug');
            $table->string('logo')->nullable();
            
            
            
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
        Schema::dropIfExists('companies');
    }
}
