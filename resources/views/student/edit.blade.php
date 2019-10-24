@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Redaguoti studentą</div>

                <div class="card-body">
                    <form method="POST" action="{{route('student.update',[$student])}}">
                        Name: <input type="text" name="student_name" value="{{$student->name}}">
                        Surname: <input type="text" name="student_surname" value="{{$student->surname}}">
                        Email: <input type="text" name="student_email" value="{{$student->email}}">
                        Phone: <input type="text" name="student_phone" value="{{$student->phone}}">
                        @csrf
                        <button type="submit">EDIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection