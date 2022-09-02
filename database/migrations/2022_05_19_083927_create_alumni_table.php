<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();

            $table->foreignId('member_id')->unsigned()->nullable()->default(null);
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');

            $table->string('occupation')->nullable()->default(null);
            $table->string('company_name')->nullable()->default(null);
            $table->string('year_survive')->nullable()->default(null);

            $table->foreignId('chapter_survive_id')->unsigned()->nullable()->default(null);
            $table->foreign('chapter_survive_id')->references('id')->on('chapter_survives')->onDelete('cascade');

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
        Schema::dropIfExists('alumni');
    }
}
