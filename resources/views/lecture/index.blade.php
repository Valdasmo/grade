@foreach ($lectures as $lecture)
<a href="{{route('lecture.edit',[$lecture])}}">{{$lecture->name}} {{$lecture->descriptiom}}</a><br>
<form method="POST" action="{{route('lecture.destroy', [$lecture])}}">
    @csrf
    <button type="submit">DELETE</button>
   </form>
   <br>
@endforeach
