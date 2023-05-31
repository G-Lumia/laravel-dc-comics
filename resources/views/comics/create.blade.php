@extends('layouts.app');

@section('content')
    <section class="container py-4">
        <form class="text-light" action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo </label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"
                id="title" name="title" value="{{ old('title') }}" required min="5" maxlength="255">
            </div>
            @error('title')
                    <div class="alert alert-danger">
                            {{ $message }}
                    </div>
            @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror"
                id="description" name="description" value="{{ old('description') }}" required min="5" maxlength="255">
            </div>
            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror"
                id="price" name="price" required maxlength="50" value="{{ old('price') }}">
            </div>
            @error('price')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror"
                 id="series" name="series" value="{{ old('series') }}" required min="5" maxlength="255">
            </div>
            @error('series')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror"
                 id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
            </div>
            @error('sale_date')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror"
                 id="type" name="type" value="{{ old('type') }}" required min="5" maxlength="255">
            </div>
            @error('type')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="Thumb" class="form-label">Thumb</label>
                <textarea class="form-control @error('thumb') is-invalid @enderror"
                 id="thumb" name="thumb" value="{{ old('thumb') }}" rows="4" cols="50" required min="5" maxlength="255"></textarea>
            </div>
            @error('thumb')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
