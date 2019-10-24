@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Redaguoti paskaitą</div>

                <div class="card-body">
                    <div class="form-group">

                    <form method="POST" action="{{route('lecture.update',[$lecture])}}">
                            <label>Paskaitos pavadinimas:</label>
                       <input type="text"class="form-control" name="lecture_name" value="{{$lecture->name}}">
                       <small class="form-text text-muted">Pakeisti vardą</small>
                       <br>
                       <label>Paskaitos aprašymas:</label>
                       <textarea name="lecture_description"class="form-control"
                            id="summernote">{{$lecture->description}}</textarea>
                            <small class="form-text text-muted">Rašyti aprašymą</small>
                        {{-- Surname: <input type="text" name="lecture_surname" value="{{$lecture->surname}}"> --}}
                        @csrf
                        <button type="submit">EDIT</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
           $('#summernote').summernote();
         });
</script>
@endsection