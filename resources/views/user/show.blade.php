@extends('layouts.main')
@section('content')  
    <h3>Профиль</h3>
    <div> Имя пользователя: {{Auth::user()->name}} </div>
    <div> Почта пользователя: {{Auth::user()->email}} </div>
    <div> ID пользователя: {{Auth::user()->id}} </div>
@endsection