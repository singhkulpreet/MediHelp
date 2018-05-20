<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sympt1');
            $table->string('sympt2');
            $table->string('sympt3');
            $table->string('sympt4');
            $table->string('sympt5');
            $table->string('medicines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}


//INSERT INTO `results`(`name`, `sympt1`, `sympt2`, `sympt3`, `sympt4`, `sympt5`, `medicines`) VALUES ([value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])

//INSERT INTO `results`(`name`, `sympt1`, `sympt2`, `sympt3`, `sympt4`, `sympt5`, `medicines`) VALUES ("Poliomylitis","The virus multipliesin intestinal cells and then reachesthe brain through blood","It damages brain and nerves and causes infantile paralysis","Stiffness of neck, fever, loss of head support","","","")