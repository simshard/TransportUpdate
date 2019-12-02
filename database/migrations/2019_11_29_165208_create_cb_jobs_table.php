<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cb_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('JobNumber')->unsigned();
            $table->bigInteger('CustOrderNum')->unsigned();
            $table->string('Reg', 16);
            $table->date('DueDate')->nullable();
            $table->date('ColDate')->nullable();
            $table->date('DelDate')->nullable();
            $table->string('Progress', 24); //->default('OUTSTANDING');
            $table->string('POCName')->nullable();
            $table->date('POCDate')->nullable();
            $table->time('POCTime')->nullable();
            $table->integer('POCMiles')->unsigned()->nullable();
            $table->string('PODName')->nullable();
            $table->date('PODDate')->nullable();
            $table->time('PODTime')->nullable();
            $table->integer('PODMiles')->unsigned()->nullable();
            $table->boolean('JobCancelled')->nullable()->default(null);
            $table->boolean('JobAborted')->nullable()->default(null);
            //$table->enum('JobAborted', ['yes','no'])->nullable();
            //$table->enum('JobCancelled', ['yes','no'])->nullable();
            $table->json('webhook_payload')->default(null);
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('cb_jobs');
    }
}
