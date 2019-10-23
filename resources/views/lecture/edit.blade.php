@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>

                <div class="card-body">

                    <form method="POST" action="{{route('lecture.update',[$lecture])}}">
                        Name: <input type="text" name="lecture_name" value="{{$lecture->name}}">
                        Description: <textarea name="lecture_description">{{$lecture->description}}</textarea>
                        {{-- Surname: <input type="text" name="lecture_surname" value="{{$lecture->surname}}"> --}}
                        @csrf
                        <button type="submit">EDIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection