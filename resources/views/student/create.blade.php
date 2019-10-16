<form method="POST" action="{{route('student.store')}}">
    Name: <input type="text" name="student_name">
    Surname: <input type="text" name="student_surname">
    Email: <input type="text" name="student_email">
    Phone: <input type="text" name="student_phone">
    @csrf
    <button type="submit">ADD</button>
 </form>
 