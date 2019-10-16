<form method="POST" action="{{route('grade.update',[$grade])}}">
    <select name="student_id">
        @foreach ($students as $student)
        <option value="{{$student->id}}" @if($student->id == $grade->student_id) selected @endif>
            {{$student->name}} {{$student->surname}}</option>
        @endforeach
    </select>

    <select name="lecture_id">
        @foreach ($lectures as $lecture)
        <option value="{{$lecture->id}}" @if($lecture->id == $grade->lecture_id) selected @endif>
            {{$lecture->name}}</option>
        @endforeach
    </select>
    @csrf
    Grade: <input type="text" name="grade_grade" value="{{$grade->grade}}">
    <button type="submit">EDIT</button>

</form>