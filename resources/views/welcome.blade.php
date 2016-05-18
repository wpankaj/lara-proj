@extends('layout')

@section('content')
    <div class="title">Laravel 5</div>
    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
@stop