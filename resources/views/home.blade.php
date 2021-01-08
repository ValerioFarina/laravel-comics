@extends('layouts.app')

@section('page-title', 'Homepage')

@section('content')
    <section class="jumbotron home">

    </section>

    <section id="container-comics">
        <div class="container">
            <h1>
                <span class="upper-case">
                    current series
                </span>
            </h1>

            <div class="d-flex wrap justify-content-evenly">
                @foreach ($comic_series as $index => $item)
                    <div class="card">
                        <a href="{{ route('comics-details', ['id' => $index]) }}">
                            <div class="thumb">
                                <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                            </div>

                            <div class="series upper-case">
                                <span>
                                    {{ $item['series'] }}
                                </span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="cta">
                <button class="upper-case">
                    load more
                </button>
            </div>
        </div>
    </section>

    <section id="buy-comics">
        <div class="container">
            <ul class="d-flex justify-content-evenly">
                <li class="d-flex align-center">
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}">
                    <span class="upper-case">
                        digital comics
                    </span>
                </li>

                <li class="d-flex align-center">
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}">
                    <span class="upper-case">
                        DC merchandise
                    </span>
                </li>

                <li class="d-flex align-center">
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}">
                    <span class="upper-case">
                        subscription
                    </span>
                </li>

                <li class="d-flex align-center">
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}">
                    <span class="upper-case">
                        comic shop locator
                    </span>
                </li>

                <li class="d-flex align-center">
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}">
                    <span class="upper-case">
                        DC power visa
                    </span>
                </li>
            </ul>
        </div>
    </section>
@endsection
