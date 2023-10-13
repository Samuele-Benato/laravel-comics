@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
    <div class="container ">
        <div class="row ">
            @forelse($comics as $comic)
                <div class="col-2 ">
                    <img class="thumb-img w-100 " src="{{ $comic['thumb'] }}" alt="comic image">
                    <h6 class="my-2 fw-bold">
                        {{ $comic['title'] }}
                    </h6>
                </div>
            @empty
                <h3>nessun comic</h3>
            @endforelse
        </div>
    </div>
@endsection
