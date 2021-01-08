@extends('layouts.app')

@section('page-title', 'Comics details')

@section('content')
    <h1>{{ $single_comics['title'] }}</h1>
@endsection
