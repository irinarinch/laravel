@extends('layouts.app')
@section('main')
<h1>Задание 2. Создать приложение для ведения учебных групп</h1>
    @section('nav')
        <nav>
            <button>
                <a href="{{ route('groups.index') }}">Группы</a> 
            </button> 
            <button>
                <a href="{{ route('students.index') }}">Студенты</a> 
            </button>
        </nav>
    @show

    @yield('content') 

    @hasSection('content')
        <button>
            <a href="{{ URL::previous() }}">Назад</a> 
        </button>
    @endif
@endsection