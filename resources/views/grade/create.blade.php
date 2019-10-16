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