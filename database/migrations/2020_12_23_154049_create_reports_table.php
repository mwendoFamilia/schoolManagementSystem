<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id');
            $table->year('year');
            $table->bigInteger('term_id');
            $table->bigInteger('subject_id');
            $table->bigInteger('subject_score')->nullable();
            $table->char('subject_grade')->nullable();
            $table->bigInteger('exam_id')->nullable();
            $table->bigInteger('test_id')->nullable();
            $table->string('report_content')->nullable();
            $table->string('teachers_comments')->nullable();
            $table->string('other_report_details')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
