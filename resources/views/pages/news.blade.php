@extends('layouts.master')
@section('title', 'News')

@section('content')

    <div class="news__wrap">
        <div class="news__list">
            <div class="container">
                @foreach($news as $news)
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 mb-4">
                            <div class="news__item">
                                <h4><strong>{{ $news->header }}</strong></h4>
                                <p class="text-muted">
                                    {{ $news->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
