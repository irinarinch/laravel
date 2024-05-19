@extends('layouts.main')
@section('content')  

<div>{{$student->surname}} {{$student->name}}
    @if ($group->is_active)
        <div>учится с {{$group->start_from}}</div>
    @else 
        <div>начнет обучение {{$group->start_from}}</div>
    @endif
    в группе {{$group->title}}
</div>

@endsection