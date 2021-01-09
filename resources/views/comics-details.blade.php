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
                    <span class="comics-type upper-case">
                        {{ $single_comics['type'] }}
                    </span>
                    <span class="gallery upper-case">
                        view gallery
                    </span>
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
                                Check Availability ▼
                            </span>
                        </div>
                    </div>
                    <p class="description">
                        {{ $single_comics['description'] }}
                    </p>
                </div>
                <div class="adv float-left">
                    <h5 class="upper-case">
                        advertisement
                    </h5>
                    <div class="adv-img">
                        <img src="{{ asset('images/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom">
            <div class="small-container clearfix">
                <div class="talent float-left">
                    <div class="row">
                        <h3>
                            Talent
                        </h3>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                Art by:
                            </h5>
                        </div>
                        <div class="col float-left">
                            @foreach ($single_comics['artists'] as $artist)
                                <a href="#">{{ $artist }}</a>{{ $loop->last ? '' : ',' }}
                            @endforeach
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                Written by:
                            </h5>
                        </div>
                        <div class="col float-left">
                            @foreach ($single_comics['writers'] as $writer)
                                <a href="#">{{ $writer }}</a>{{ $loop->last ? '' : ',' }}
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="specs float-left">
                    <div class="row">
                        <h3>
                            Specs
                        </h3>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                Series:
                            </h5>
                        </div>
                        <div class="col float-left upper-case">
                            {{ $single_comics['series'] }}
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                U.S. Price:
                            </h5>
                        </div>
                        <div class="col float-left">
                            {{ $single_comics['price'] }}
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                On Sale Date:
                            </h5>
                        </div>
                        <div class="col float-left">
                            {{ DateTime::createFromFormat( 'Y-m-d' ,$single_comics['sale_date'])->format('M d Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta">
        <div class="small-container">
            <ul class="actions clearfix">
                <li class="action float-left d-flex justify-content-between">
                    <span class="name upper-case">
                        digital comics
                    </span>
                    <div class="icon">
                    </div>
                </li>
                <li class="action float-left d-flex justify-content-between">
                    <span class="name upper-case">
                        digital comics
                    </span>
                    <div class="icon">
                    </div>
                </li>
                <li class="action float-left d-flex justify-content-between">
                    <span class="name upper-case">
                        digital comics
                    </span>
                    <div class="icon">
                    </div>
                </li>
                <li class="action float-left d-flex justify-content-between">
                    <span class="name upper-case">
                        digital comics
                    </span>
                    <div class="icon">
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
