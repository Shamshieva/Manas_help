@extends('layouts.admin')
@section('content')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <script>    tinymce.init({
            selector: 'textarea',  // Задайте селектор для элемента, в котором вы хотите использовать редактор        plugins: 'autolink lists link image charmap print preview',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        });
    </script>

    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"> Category Create</h4>
                    </div>

                </div>
                <div class="card-body">
                    <div class="collapse" id="form-validation-1">

                    </div>
                    <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="title_ky">Title_ky</label>
                                <input type="text" class="form-control" id="title_ky" name="title_ky" required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="title_tr">Title_tr</label>
                                <input type="text" class="form-control" id="title_tr" name="title_tr" required="">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" id="logo" name="logo">
                                <label class="custom-file-label" for="logo">logo</label>
                            </div>
                            @error('logo')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-0">
                            <button class="btn btn-primary" type="submit">Create</button>
                            <a href="{{ route('admin.category.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
