<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
</head>
<body>
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
</body>
</html>