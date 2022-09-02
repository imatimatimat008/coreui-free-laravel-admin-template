<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegiatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collegiates', function (Blueprint $table) {
            $table->id();

            $table->foreignId('member_id')->unsigned()->nullable()->default(null);
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            $table->string('school')->nullable()->default(null);
            $table->string('course')->nullable()->default(null);
            $table->string('year_graduated')->nullable()->default(null);

            $table->foreignId('chapter_survive_id')->unsigned()->nullable()->default(null);
            $table->foreign('chapter_survive_id')->references('id')->on('chapter_survives')->onDelete('cascade');

            $table->string('year_survive')->nullable()->default(null);
            $table->string('place_survive')->nullable()->default(null);
            $table->string('grand_epsilonian')->nullable()->default(null);
            $table->string('master_ritual')->nullable()->default(null);
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
        Schema::dropIfExists('collegiates');
    }
}
