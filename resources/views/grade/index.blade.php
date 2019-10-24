@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Studentų pažymiai</div>

         {{-- Filtravimas start --}}
 
         <form method="GET" action="{{route('grade.index')}}">
            <select class="form-control" name="filter">
                @foreach ($students as $student)
                <option value="{{$student->id}}" @if($student->id==$filter) selected @endif>{{$student->name}}
                    {{$student->surname}}</option>
                @endforeach
            </select>

            <br>
            <button type="submit">Rodyti studento pažymius</button>
        </form>
        {{-- Filtravimas end --}}

        <div class="card-body">

          @foreach ($grades as $grade)
          <a href="{{route('grade.edit',[$grade])}}">{{$grade->gradeStudent->name}} {{$grade->gradeStudent->surname}}
            {{$grade->gradeLecture->name}} {{$grade->grade}}</a>
          <form method="POST" action="{{route('grade.destroy', [$grade])}}">
            @csrf
            <button type="submit">DELETE</button>
          </form>
          <br>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
@endsection