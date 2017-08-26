@extends('layout.app')

@section('title', 'Edit')

@section('body')
    {{ $song->title }} <br>By
    {{ $song->artist }}
@stop