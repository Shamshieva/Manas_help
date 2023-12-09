@extends('layout.admin')
@section('content')

    <h1>Subcategories</h1>

    <form action="{{ route('admin.index') }}" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="query" class="form-control" placeholder="Search...">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-primary">Search</button>
            </div>
        </div>
    </form>
    @if($subcategories->isEmpty())
        <p>No posts found.</p>
    @else

    <div class="container-fluid">
        <div class="row">
            @foreach ($subcategories as $subcategory)
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="card">
                    <img src="{{ $subcategory->logo }}" class="card-img-top" alt="#">
                    <div class="card-body">
                        <h4 class="card-title">{{  $subcategory->title_ky  }}</h4>
                        <p class="card-text">{{ Illuminate\Support\Str::limit(strip_tags($subcategory->description_ky), 100) }}</p>
                        <a href="{{ route('admin.subcategory.show', $subcategory->id) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
    <form>
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search video" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <button type="submit" class="border-0 bg-transparent">
                    <i class="svg-icon small-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </i>
                </button>
            </span>
        </div>
    </form>
@endsection
