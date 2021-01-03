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
            $table->bigInteger('subject_grade')->nullable();
            $table->bigInteger('exam_id')->nullable();
            $table->bigInteger('test_id')->nullable();
            $table->bigInteger('report_content')->nullable();
            $table->bigInteger('teachers_comments')->nullable();
            $table->bigInteger('other_report_details')->nullable();
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
