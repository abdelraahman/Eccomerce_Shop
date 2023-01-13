@extends('admin.layout')
@section('content')
    <div class="container">
        <div style="margin: 20px">
            <h4>EDIT CATEGORY</h4>
        </div>
        <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin: 20px">
                <label class="form-label">Category Title</label>
                <div class="input-group input-group-outline">
                    {{-- <label class="form-label">Category Title</label> --}}
                    <input type="text" class="form-control" name="title" value="{{ $category->title }}">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    {{-- <label class="form-label">Category Description</label> --}}
                    <input type="text" class="form-control" name="description" value="{{ $category->description }}">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    {{-- <label class="form-label">Category Slug</label> --}}
                    <input type="text" class="form-control" name="slug" value="{{ $category->slug }}">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    {{-- <label class="form-label">Meta Title</label> --}}
                    <input type="text" class="form-control" name="meta_title" value="{{ $category->meta_title }}">
                </div>
            </div>

            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    {{-- <label class="form-label">Meta Description</label> --}}
                    <input type="text" class="form-control" name="meta_description"
                        value="{{ $category->meta_description }}">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    {{-- <label class="form-label">Meta keywords</label> --}}
                    <input type="text" class="form-control" name="meta_keywords" value="{{ $category->meta_keywords }}">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="">
                    <input type="checkbox" name="status" {{ $category->status ? 'checked' : '' }}>
                    <label class="form-label">status</label>
                </div>
            </div>
            <div style="margin: 20px">
                <div class="">
                    <input type="checkbox" name="popular" {{ $category->popular ? 'checked' : '' }}>
                    <label class="form-label">popular</label>
                </div>
            </div>

            <div style="margin: 20px">
                <label for="exampleFormControlTextarea1">Category image</label>
                <br>
                <img src="{{ URL($category->image) }}" alt="" width="100" height="100">
                <input type="file" name="image" value="{{ URL($category->image) }}">
                {{-- <textarea class="form-control" name="photo" rows="3"></textarea> --}}
            </div>
            <div style="margin: 20px">
                <button type="submit" class="btn btn-primary">SAVE</button>
                <a class="btn btn-primary" href="{{ route('categories') }}">Back</a>
            </div>

        </form>



    </div>
@endsection
