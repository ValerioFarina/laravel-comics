@extends('layouts.app')

@section('page-title', 'Comics details')

@section('content')
    <section class="jumbotron comics-details">
        <div class="top">

        </div>
        <div class="bottom">
            <div class="small-container">
                <div class="thumb">
                    <img src="{{ $single_comics['thumb'] }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section id="comics-info">
        <div class="top">
            <div class="small-container">
                <h1 class="upper-case">
                    {{ $single_comics['title'] }}
                </h1>
            </div>
        </div>

        <div class="bottom">

        </div>
    </section>
@endsection
