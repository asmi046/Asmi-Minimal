@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <x-breadcrumbs.main :title="$page->title"></x-breadcrumbs.main>
            <h1 class="page_h1">{{ $page->title }}</h1>
            <div class="text_styles">
                {!! $page->description !!}
            </div>
        </div>
    </section>
@endsection
