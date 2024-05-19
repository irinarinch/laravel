@extends('layouts.main')

@section('content')
    <form action="{{ route('students.store', $group) }}" method="post">
        @csrf
        <label for="surname">Фамилия</label>
        <input type="text" name="surname">   
        <label for="name">Имя</label>
        <input type="text" name="name">     
        <button type="submit" class="btn btn-primary">Создать студента</button>
    </form>
@endsection
