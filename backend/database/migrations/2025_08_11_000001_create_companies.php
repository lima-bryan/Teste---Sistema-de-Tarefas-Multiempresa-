<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanies extends Migration
{
   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) { //mudei o nome da tabela na migration lá embaixo
            $table->id();

            $table->string('name', 100) -> unique();
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->string('address', 100);

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
