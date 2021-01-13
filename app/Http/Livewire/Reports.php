<?php

namespace App\Http\Livewire;

use App\Models\Report;
use Livewire\Component;

class Reports extends Component
{
    public $reports, $student_id, $classes_id, $year, $term_id, $subject_id, $subject_score, $subject_grade, $exam_id, $test_id, $report_content, $teachers_comments, $other_report_details;
    public $isOpen = 0;

    public function render()
    {
        $this->reports = Report::all();
        return view('livewire.reports.reports');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->student_id = '';
        $this->Subject_id = '';
        $this->classes_id = '';
        $this->subject_score = '';
        $this->subject_grade = '';
        $this->exam_id = '';
        $this->test_id = '';
        $this->year = '';
        $this->term_id = '';
        $this->report_content = '';
        $this->teachers_comments = '';
        $this->grade = '';
        $this->other_report_details = '';
    }

    public function store()
    {
        $this->validate([
            'student_id' => 'required',
            'Subject_id' => 'required',
            'classes_id' => 'required',
            'subject_score' => 'required',
            'subject_grade' => 'required',
            'exam_id' => 'required',
            'test_id' => 'required',
            'year' => 'required',
            'term_id' => 'required',
            'report_content' => 'required',
            'teachers_comments' => 'required',
            'grade' => 'required',
            'other_report_details' => 'required',
        
        ]);
        Report::updateOrCreate(['id' => $this->report_id], [
            'student_id' => $this->student_id,
            'Subject_id' => $this->Subject_id,
            'classes_id' => $this->classes_id,
            'subject_score' => $this->subject_score,
            'subject_grade' => $this->subject_grade,
            'exam_id' => $this->exam_id,
            'test_id' => $this->test_id,
            'year' => $this->year,
            'term_id' => $this->term_id,
            'report_content' => $this->report_content,
            'teachers_comments' => $this->teachers_comments,
            'grade' => $this->grade,
            'other_report_details' => $this->other_report_details
        ]);
        session()->flash(
            'message',
            $this->report_id ? 'Report Updated Successfully!' : 'Report Created Successfully.'
        );
        $this->closeModal();
        $this->resetInputFields();
    }
    public function edit($id)
    {
        $Report = Report::findOrFail($id);
        $this->report_id = $id;
        $this->student_id = $Report->student_id;
        $this->Subject_id = $Report->Subject_id;
        $this->classes_id = $Report->classes_id;
        $this->subject_score = $Report->subject_score;
        $this->subject_grade = $Report->subject_grade;
        $this->exam_id = $Report->exam_id;
        $this->test_id = $Report->test_id;
        $this->year = $Report->year;
        $this->term_id = $Report->term_id;
        $this->report_content = $Report->report_content;
        $this->teachers_comments = $Report->teachers_comments;
        $this->grade = $Report->grade;
        $this->other_report_detail = $Report->other_report_detail;
        $this->openModal();
    }



    public function delete($id)
    {
        Report::find($id)->delete();
        session()->flash('message', 'Report Deleted Successfully.');
    }
}
