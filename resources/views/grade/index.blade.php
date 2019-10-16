@foreach ($grades as $grade)
  <a href="{{route('grade.edit',[$grade])}}">{{$grade->gradeStudent->name}} {{$grade->gradeStudent->surname}}
     {{$grade->gradeLecture->name}} {{$grade->grade}}</a>
  <form method="POST" action="{{route('grade.destroy', [$grade])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
