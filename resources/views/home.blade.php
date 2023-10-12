@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container">
        <div class="row">
            @forelse($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="comic image">
                        <div class="card-body">
                            <h3>
                                {{ $comic['title'] }}
                            </h3>
                            <p>
                                {{ $comic['description'] }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <h3>nessun comic</h3>
            @endforelse
        </div>
    </div>
@endsection
