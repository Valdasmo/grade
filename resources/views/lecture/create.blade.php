@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sukurti paskaitą</div>

                <div class="card-body">

                    <form method="POST" action="{{route('lecture.store')}}">
                        Name: <input type="text" name="lecture_name">
                        Description: <textarea name="lecture_description"></textarea>
                        @csrf
                        <button type="submit">ADD</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection