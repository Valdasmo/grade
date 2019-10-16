<form method="POST" action="{{route('lecture.store')}}">
    Name: <input type="text" name="lecture_name">
    Description: <textarea name="lecture_description"></textarea>
    @csrf
    <button type="submit">ADD</button>
 </form>
 