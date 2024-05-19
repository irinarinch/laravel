@extends('layouts.main')
@section('content') 
    <h2>Студенты:</h2> 
    @foreach ($students as $student)
        <div>{{$student->id}}. {{$student->surname}} {{$student->name}}</div>
    @endforeach    
@endsection