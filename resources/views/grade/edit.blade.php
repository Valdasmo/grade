@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Redaguoti pažymį</div>

                <div class="card-body">
                    <div class="form-group">

                        <form method="POST" action="{{route('grade.update',[$grade])}}">
                            <label>Studento vardas pavardė:</label>
                            <select name="student_id" class="form-control">
                                @foreach ($students as $student)
                                <option value="{{$student->id}}" @if($student->id == $grade->student_id) selected
                                    @endif>
                                    {{$student->name}} {{$student->surname}}</option>
                                @endforeach
                            </select>
                            <br>
                            <label>Paskaitos pavadinimas:</label>
                            <select name="lecture_id" class="form-control">
                                @foreach ($lectures as $lecture)
                                <option value="{{$lecture->id}}" @if($lecture->id == $grade->lecture_id) selected
                                    @endif>
                                    {{$lecture->name}}</option>
                                @endforeach
                            </select>
                            @csrf
                            <br>
                            <label>Pažymys:</label>
                            <input type="text" name="grade_grade" class="form-control" value="{{$grade->grade}}">
                            <button type="submit">EDIT</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection