@extends('layouts.app')

@section('content')
    <section class="jumbotron">
    </section>
    <section class="container py-5">
        @if (session('success'))
            <div class="bg-success text-light">
                <h3>{{ session('success') }}</h3>
            </div>
        @endif
        <h1>Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="card col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-5">
                    <div class="card-body">
                        <div class="thumb p-3 flex-column">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <img class="cropped" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </a>
                            <div class="text-center text-light">
                                <p>
                                    {{ $comic['title'] }}
                                </p>
                            </div>
                            <div class="d-flex justify-content-center my-3">
                                <form>
                                    <a class="btn btn-success" href="{{ route('comics.edit', $comic) }}"> Edit </a>
                                </form>
                                <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                                    @csrf
                                    @method('DELETE');
                                    <input class="btn btn-danger delete-button" type="submit" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 m-3 align-self-center">
                <button class="btn btn-light thumb">
                    <a href="{{ route('comics.create') }}">
                        Crea un nuovo fumetto
                    </a>
                </button>
            </div>
        </div>
    </section>
    @include('partials.popupDelete');
@endsection
