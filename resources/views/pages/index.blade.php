@extends('layout')

@section('content')
<h1>All Pages</h1>
@foreach($people as $person)
    <li>{{$person}}</li>
@endforeach
@stop