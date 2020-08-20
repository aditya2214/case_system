<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('case_number', 50)->nullable()->unique();
            $table->string('color', 20);
            $table->string('from', 50);
            $table->string('destionation_export', 50);
            $table->integer('status')->nullable();
            $table->string('created_by', 25);
            $table->string('updated_by', 25);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_models');
    }
}
