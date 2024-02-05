@extends('user.layouts.app')
@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
            <section class="featured-posts-section">
                <ul>
                    @foreach($categories as $category)
                        <li><a href="{{ route('category.subcategories.index', $category->id) }}">{{ $category->title_ky }}</a></li>
                    @endforeach
                </ul>


            </section>

@endsection
