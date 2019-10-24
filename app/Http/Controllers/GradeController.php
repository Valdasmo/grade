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
    public function index(Request $request)
    {
        $filter = $request->get('filter', '');
        $students = Student::all();
        if ($filter) {
            $grades = Grade::where('student_id', $filter)->get(); // db

        } else {
            $grades = Grade::all(); //<<-- šita eilutė čia įdedama //paėmus ją iš viršaus (buvo po šia eilute: public function index())
        }


        return view('grade.index', [
            'grades' => $grades,
            'students' => $students,
            'filter' => $filter ?? 0
        ]);
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
        return redirect()->route('grade.index')->with('success_message', 'Sekmingai įrašytas.');
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
        return redirect()->route('grade.index')->with('success_message', 'Sėkmingai pakeistas.');
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
        return redirect()->route('grade.index')->with('success_message', 'Sekmingai ištrintas.');
    }
}
