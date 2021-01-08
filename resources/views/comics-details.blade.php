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
                    <span class="cta upper-case">
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
                                Check Availability
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
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                Written by:
                            </h5>
                        </div>
                        <div class="col float-left">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                        <div class="col float-left">
                            -------
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                U.S. Price:
                            </h5>
                        </div>
                        <div class="col float-left">
                            -------
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col float-left">
                            <h5>
                                On Sale Date:
                            </h5>
                        </div>
                        <div class="col float-left">
                            -------
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
