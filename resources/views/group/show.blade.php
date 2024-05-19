@extends('layouts.main')
@section('content')  
    <h2>Группа {{$group->title}}</h2>
    
    @if ($group->is_active)
        <div>Обучение началось {{$group->start_from}}</div>
    @else 
        <div>Обучение начнется {{$group->start_from}}</div>
    @endif

    <h3>Студенты группы:</h3>
    <ul>
        @foreach($students as $student) 
            <li>
                <a href="{{ route('students.show', [$student->group_id, $student]) }}">
                    {{$student->surname}} {{$student->name}}
                </a>    
            </li>
        @endforeach 
    </ul> 
    <button>
        <a href="{{ route('students.create', $group->id) }}">
            Новый студент
        </a> 
    </button>  
@endsection