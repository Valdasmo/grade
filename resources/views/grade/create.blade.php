@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>

                <div class="card-body">

                    <form method="POST" action="{{route('grade.store')}}">

                        <select name="student_id">
                            @foreach ($students as $student)
                            <option value="{{$student->id}}">{{$student->name}} {{$student->surname}}</option>
                            @endforeach
                        </select>

                        <select name="lecture_id">
                            @foreach ($lectures as $lecture)
                            <option value="{{$lecture->id}}">{{$lecture->name}}</option>
                            @endforeach
                        </select>

                        @csrf
                        Grade: <input type="text" name="grade_grade">

                        <button type="submit">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection