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
            <div class="small-container clearfix">
                <div class="info float-left">
                    <h1 class="upper-case">
                        {{ $single_comics['title'] }}
                    </h1>
                    <div class="sales-info d-flex">
                        <div class="left d-flex justify-content-between">
                            <span>
                                U.S. Price: {{ $single_comics['price'] }}
                            </span>
                            <span class="upper-case">
                                available
                            </span>
                        </div>
                        <div class="right">
                            <span>
                                Check Availability
                            </span>
                        </div>
                    </div>
                </div>
                <div class="adv float-left">

                </div>
            </div>
        </div>

        <div class="bottom">

        </div>
    </section>
@endsection
