@extends('layout')

@section('content')
<h1>All Pages</h1>
@foreach($pages as $page)
    <li>{{$page->title}}</li>
@endforeach
@stop