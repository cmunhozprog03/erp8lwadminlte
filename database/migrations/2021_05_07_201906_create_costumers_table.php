<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function GuzzleHttp\default_user_agent;

class CreateCostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costumers', function (Blueprint $table) {
            $table->id();

            $table->string('social_name')->unique();
            $table->string('alias')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('cpf')->nullable();
            $table->enum('type_costurmer', [1, 2])->default(1)->nullable();
            $table->string('ie')->nullable();
            $table->string('im')->nullable();
            $table->string('federal_entity')->nullable();
            $table->double('capital')->nullable();
            
            
            $table->string('slug');
            $table->enum('type', [1, 2])->default(1);
            $table->enum('status', [1, 2]);

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
        Schema::dropIfExists('costumers');
    }
}
