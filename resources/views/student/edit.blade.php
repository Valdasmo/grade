<form method="POST" action="{{route('student.update',[$student])}}">
    Name: <input type="text" name="student_name" value="{{$student->name}}">
    Surname: <input type="text" name="student_surname" value="{{$student->surname}}">
    Email: <input type="text" name="student_email" value="{{$student->email}}">
    Phone: <input type="text" name="student_phone" value="{{$student->phone}}">
    @csrf
    <button type="submit">EDIT</button>
 </form>
 