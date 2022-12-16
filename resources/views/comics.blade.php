@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-dark">

        <section class="comics row row-cols-1 row-cols-md-3 g-4">
            @forelse($comics as $comicbook)
                <div class="col">
                    <div class="card">
                        <img src="{{ $comicbook['thumb'] }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4>{{ $comicbook['title'] }}</h4>
                            <div class="price">{{ $comicbook['price'] }}</div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p>No comics in this shop yet.</p>
                </div>
            @endforelse
        </section>

    </div>
@endsection
