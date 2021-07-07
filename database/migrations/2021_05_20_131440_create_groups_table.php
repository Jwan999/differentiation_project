<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();

            $table->string('group_name');

            $table->string('student_1_name');
            $table->string('student_1_email')->nullable();
            $table->string('student_1_number')->nullable();
            $table->string('student_1_grade')->nullable();

            $table->string('student_2_name')->nullable();
            $table->string('student_2_email')->nullable();
            $table->string('student_2_number')->nullable();
            $table->string('student_2_grade')->nullable();

            $table->string('student_3_name')->nullable();
            $table->string('student_3_email')->nullable();
            $table->string('student_3_number')->nullable();
            $table->string('student_3_grade')->nullable();

            $table->string('student_4_name')->nullable();
            $table->string('student_4_email')->nullable();
            $table->string('student_4_number')->nullable();
            $table->string('student_4_grade')->nullable();

            $table->integer('project_id')->nullable();

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
        Schema::dropIfExists('groups');
    }
}
