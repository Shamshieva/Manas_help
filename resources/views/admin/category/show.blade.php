@extends('layout.admin')
@section('content')

<<<<<<< HEAD
    <div>
        <li class="sidebar-layout">
            <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                <i>
                    <svg class="svg-icon" id="iq-ui-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                    </svg>
                </i>
                <span class="ml-2">Category name</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
            <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">

                <li class=" sidebar-layout">
                    <a href="../backend/ui-embed-video.html" class="svg-icon">
                        <i class="">
                            <svg class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path>
                            </svg>
                        </i><span class="">Subcategory name</span>
                    </a>
                </li>
            </ul>
        </li>
    </div>

=======

{{--    <div>--}}
{{--        <div>{{ $category->id }} . {{ $category->title_ky }}</div>--}}
{{--        <div>{{ $category->description_ky }}</div>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <a href="{{ route('$category.edit', $category->id) }}">Edit</a>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <form action="{{ route('$category.delete', $category->id) }}" method="post">--}}
{{--            @csrf--}}
{{--            @method('delete')--}}
{{--            <input type="submit" value="Delete" class="btn btn-danger">--}}
{{--        </form>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        <a href="{{ route('admin.category.index') }}">Back</a>--}}
{{--    </div>--}}

    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">{{$category->title_ky}}</h4>
                        <h4 class="card-title">{{$category->title_tr}}</h4>
                        <h4 class="card-title">{{$category->id}}</h4>
                    </div>
                    <div class="header-action">
                        <i data-toggle="collapse" data-target="#breadcrumb-1" >
                            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </i>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.subcategory.store.video',$category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title_ky">Title KG</label>
                            <input name="title_ky" id="title_ky" class="form-control">
                            @error('title_ky')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class="form-floating mb-3">
                                <label for="description_ky">description_ky</label>
                                <textarea class="form-control" placeholder="description_ky" id="description_ky" name="description_ky"></textarea>
                            </div>
                            @error('description_ky')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <p>Custom Kg file:</p>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="video_ky">
                            <label class="custom-file-label" for="customFile">Файл тандаңыз </label>
                            @error('video_ky')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="title_tr">Title TR</label>
                            <input name="title_tr" id="title_tr" class="form-control">
                            @error('title_tr')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                            <div class="form-floating mb-3">
                                <label for="description_tr">Description_tr</label>
                                <textarea class="form-control" id="description_tr" name="description_tr"></textarea>
                            </div>
                        </div>
                        @error('description_tr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="customFile" name="video_tr">
                            <label class="custom-file-label" for="customFile">File Seçiniz </label>
                            @error('video_tr')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>

            </div>

        </div>
    </div>

{{--    <div class="card">--}}
{{--        <div class="row">--}}
{{--            @foreach($category->videos as $video)--}}
{{--                <div class="col-sm-6 col-md-6 col-lg-3">--}}
{{--                    <div class="card">--}}
{{--                        <video class="card-img-top" controls>--}}
{{--                            <source src="{{asset($video->video_path_ky)}}">--}}
{{--                            Your browser does not support the video tag.--}}
{{--                        </video>--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">{{$video->title_ky}}</h4>--}}
{{--                            <p class="card-text">{{$video->description_ky}} </p>--}}
{{--                            <a href="#" class="btn btn-primary">Button</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}

{{--        </div>--}}

{{--    </div>--}}
>>>>>>> aab6af133f789bd6d134432be9f92b102a49dcee

@endsection


