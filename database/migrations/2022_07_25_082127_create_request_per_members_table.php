<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestPerMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_per_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_id')->nullable()->default(null);
            $table->foreign('request_id')->references('id')->on('requests')->onDelete('cascade');
            $table->foreignId('member_id')->nullable()->default(null);
            $table->foreign('member_id')->references('id')->on('members')->onDelete('cascade');
            $table->string('memo')->nullable();
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
        Schema::dropIfExists('request_per_members');
    }
}
