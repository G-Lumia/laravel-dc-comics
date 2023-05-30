@extends('layouts.app')

@section('content')
<div class="container text-light">
    <div class="py-2">
        <div>
            <h1>{{ $comic['title'] }}</h1>
        </div>
        <div>

            <div>
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <div class="description py-5">
                    <div class="d-flex align-content-center gap-2">
                        <h4> Series: </h4>
                        <p>
                            {{ $comic['series'] }}
                        </p>
                    </div>
                    <div class="d-flex align-content-center gap-2">
                        <h4> Price: </h4>
                        <p>
                            {{ $comic['price'] }}
                        </p>
                    </div>
                    <div class="d-flex align-content-center gap-2">
                        <h4> Type: </h4>
                        <p>
                            {{ $comic['type'] }}
                        </p>
                    </div>
                    <div class="d-flex align-content-center gap-2">
                        <h4> Sale date: </h4>
                        <p>
                            {{ $comic['sale_date'] }}
                        </p>
                    </div>

                </div>
            </div>
            <div class="py-4">
                <div>
                    <h5> Descrizione: </h5>
                    <p>
                        {{ $comic['description'] }}
                    </p>
                </div>
            </div>
            <div class="py-3">
                <a href="/"> Go back</a>
            </div>
        </div>
    </div>
</div>
@endsection
