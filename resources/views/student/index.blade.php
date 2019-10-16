@foreach ($students as $student)
<a href="{{route('student.edit',[$student])}}">{{$student->name}} {{$student->surname}} <br>
     {{$student->email}} <br> {{$student->phone}}</a><br>
<form method="POST" action="{{route('student.destroy', [$student])}}">
    @csrf
    <button type="submit">DELETE</button>
   </form>
   <br>
@endforeach
