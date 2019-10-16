<form method="POST" action="{{route('lecture.update',[$lecture])}}">
    Name: <input type="text" name="lecture_name" value="{{$lecture->name}}">
    Description: <textarea name="lecture_description">{{$lecture->description}}</textarea>
    {{-- Surname: <input type="text" name="lecture_surname" value="{{$lecture->surname}}"> --}}
    @csrf
    <button type="submit">EDIT</button>
 </form>
 