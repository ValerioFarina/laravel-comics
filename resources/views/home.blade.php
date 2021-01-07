@extends('layouts.app')

@section('page-title', 'Homepage')

@section('content')
    <div class="jumbotron">

    </div>

    <div class="container-comics">
        <div class="container">
            <h1>
                <span class="upper-case">
                    current series
                </span>
            </h1>

            <div class="d-flex wrap justify-content-evenly">
                @foreach ($comic_series as $item)
                    <div class="card">
                        <div class="thumb">
                            <img src="{{ $item['thumb'] }}" alt="{{ $item['series'] }}">
                        </div>

                        <div class="series upper-case">
                            <span>
                                {{ $item['series'] }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="cta">
                <button class="upper-case">
                    load more
                </button>
            </div>
        </div>
    </div>
@endsection
