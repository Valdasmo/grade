<?php

namespace App\Http\Controllers;

use App\Grade;
use Illuminate\Http\Request;
use App\Student;
use App\Lecture;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grade.index', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lectures = Lecture::all();
        $students = Student::all();
        return view('grade.create', ['students' => $students, 'lectures' => $lectures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grade = new Grade;
        $grade->grade = $request->grade_grade;
        $grade->student_id = $request->student_id;
        $grade->lecture_id = $request->lecture_id;
        $grade->save();
        return redirect()->route('grade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        $lectures = Lecture::all();
        $students = Student::all();
        return view('grade.edit', [
            'grade' => $grade,
            'students' => $students,
            'lectures' => $lectures
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->grade = $request->grade_grade;
        $grade->student_id = $request->student_id;
        $grade->lecture_id = $request->lecture_id;
        $grade->save();
        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {

        $grade->delete();
        return redirect()->route('grade.index');
    }
}
