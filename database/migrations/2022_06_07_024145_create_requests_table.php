<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('request_type_id')->nullable()->default(null);
            $table->foreign('request_type_id')->references('id')->on('request_types')->onDelete('cascade');
            $table->date('request_date')->nullable();
            $table->date('date_completed')->nullable();
            $table->foreignId('request_status_id')->nullable()->default(null);
            $table->foreign('request_status_id')->references('id')->on('request_statuses')->onDelete('cascade');
            $table->foreignId('chapter_affiliate_id')->nullable()->default(null);
            $table->foreign('chapter_affiliate_id')->references('id')->on('chapter_affiliates')->onDelete('cascade');
            $table->foreignId('member_type_id')->nullable()->default(null);
            $table->foreign('member_type_id')->references('id')->on('member_types')->onDelete('cascade');
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
        Schema::dropIfExists('requests');
    }
}
