@extends('layouts.app')

@section('page-title', 'Homepage')

@section('content')
    <div class="jumbotron">

    </div>

    <div class="container-comics">
        <div class="container">
            {{ dd($comics) }}
        </div>
    </div>
@endsection
