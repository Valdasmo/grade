@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">PAVADINIMAS</div>

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