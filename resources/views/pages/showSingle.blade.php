@extends('layout')

@section('content')

<h1>{{$page->title}}</h1>

<?php echo html_entity_decode($page->body); ?>
