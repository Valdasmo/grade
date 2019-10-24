@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Įvesti studentą</div>

                <div class="card-body">

                    <form method="POST" action="{{route('student.store')}}">
                        Name: <input type="text" name="student_name">
                        Surname: <input type="text" name="student_surname">
                        Email: <input type="text" name="student_email">
                        Phone: <input type="text" name="student_phone">
                        @csrf
                        <button type="submit">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection