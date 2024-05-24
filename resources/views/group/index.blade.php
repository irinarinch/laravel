@extends('layouts.main')
@section('content')  
    <h2>Группы:</h2>
    <ul>
        @foreach ($groups as $group)
        <li>
            <a href="{{ route('groups.show', $group->id) }}">
                {{$group->title}}
            </a>
        </li>
        @endforeach  
    </ul>  
    <button>
        <a href="{{ route('groups.create') }}">Новая группа</a> 
    </button>    
@endsection