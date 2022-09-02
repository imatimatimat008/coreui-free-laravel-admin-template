<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('lastname')->required();
            $table->string('firstname')->required();
            $table->string('middlename')->nullable()->default(null);
            $table->string('suffix')->nullable()->default(null);

            $table->foreignId('gender_id')->nullable()->default(null);
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');

            $table->foreignId('civil_status_id')->nullable()->default(null);
            $table->foreign('civil_status_id')->references('id')->on('civil_statuses')->onDelete('cascade');

            $table->foreignId('nationality_id')->nullable()->default(null);
            $table->foreign('nationality_id')->references('id')->on('nationalities')->onDelete('cascade');

            $table->foreignId('religion_id')->nullable()->default(null);
            $table->foreign('religion_id')->references('id')->on('religions')->onDelete('cascade');

            $table->foreignId('member_type_id')->nullable()->default(null);
            $table->foreign('member_type_id')->references('id')->on('member_types')->onDelete('cascade');

            $table->foreignId('chapter_affiliate_id')->nullable()->default(null);
            $table->foreign('chapter_affiliate_id')->references('id')->on('chapter_affiliates')->onDelete('cascade');

            $table->date('birthday')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('contact_number')->nullable()->default(null);
            $table->string('birth_place')->nullable()->default(null);
            $table->string('permanent_address')->nullable()->default(null);
            $table->string('current_address')->nullable()->default(null);
            $table->string('photo')->nullable()->default('no');
            $table->string('signature')->nullable()->default('no');
            $table->string('emergency_contact_person')->nullable()->default(null);
            $table->string('emergency_contact_number')->nullable()->default(null);
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
        Schema::dropIfExists('members');
    }
}
