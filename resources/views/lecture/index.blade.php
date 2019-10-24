@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Paskaitos</div>

                <div class="card-body">

                    @foreach ($lectures as $lecture)
                    <a href="{{route('lecture.edit',[$lecture])}}">{{$lecture->name}} {{$lecture->descriptiom}}</a><br>
                    <form method="POST" action="{{route('lecture.destroy', [$lecture])}}">
                        @csrf
                        <button type="submit">DELETE</button>
                    </form>
                    <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection