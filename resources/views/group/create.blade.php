@extends('layouts.main')
@section('content')
    <form action="{{ route('groups.store') }}" method="post">
        @csrf
        <label for="title">Название группы</label>
        <input type="text" name="title">
        <label for="start_from">Дата начала обучения</label>
        <input type="date" name="start_from">     
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
@endsection
