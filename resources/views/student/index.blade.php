@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row justify-content-center">
          <div class="col-md-8">
               <div class="card">
                    <div class="card-header">PAVADINIMAS</div>

                    <div class="card-body">

                         @foreach ($students as $student)
                         <a href="{{route('student.edit',[$student])}}">{{$student->name}} {{$student->surname}} <br>
                              {{$student->email}} <br> {{$student->phone}}</a><br>
                         <form method="POST" action="{{route('student.destroy', [$student])}}">
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