@extends('layout.admin')
@section('content')

    <div>
        <div>{{ $subcategory->id }} . {{ $subcategory->title_ky }}</div>
        <div>{{ $subcategory->description_ky }}</div>
    </div>
    <div>
{{--        <a href="{{ route('$category.edit', $category->id) }}">Edit</a>--}}
    </div>
    <div>
{{--        <form action="{{ route('$category.delete', $category->id) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('delete')--}}
{{--            <input type="submit" value="Delete" class="btn btn-danger">--}}
{{--        </form>--}}
    </div>
    <div>
        <a href="{{ route('admin.subcategory.index') }}">Back</a>
    </div>

@endsection
