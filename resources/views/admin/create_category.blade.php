@extends('admin.layout')

@section('content')
    <div class="container">
        {{-- @if (count($errors) > 0)
            @foreach ($errors->all() as $item)
                <div class="alert alert-primary" role="alert">
                    {{ $errors }}
                </div>
            @endforeach
        @endif --}}
        <div style="margin: 20px">
            <h4>ADD CATEGORY</h4>
        </div>
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    <label class="form-label">Category Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    <label class="form-label">Category Description</label>
                    <input type="text" class="form-control" name="description">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    <label class="form-label">Category Slug</label>
                    <input type="text" class="form-control" name="slug">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    <label class="form-label">Meta Title</label>
                    <input type="text" class="form-control" name="meta_title">
                </div>
            </div>

            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    <label class="form-label">Meta Description</label>
                    <input type="text" class="form-control" name="meta_description">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="input-group input-group-outline">
                    <label class="form-label">Meta keywords</label>
                    <input type="text" class="form-control" name="meta_keywords">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="">
                    <input type="checkbox" name="status">
                    <label class="form-label">status</label>
                </div>
            </div>
            <div style="margin: 20px">
                <div class="">
                    <input type="checkbox" name="popular">
                    <label class="form-label">popular</label>
                </div>
            </div>

            <div style="margin: 20px">
                <label for="exampleFormControlTextarea1">Category image</label>
                <input type="file" name="image">
                {{-- <textarea class="form-control" name="photo" rows="3"></textarea> --}}
            </div>
            <div style="margin: 20px">
                <button type="submit" class="btn btn-primary">SAVE</button>
                <a class="btn btn-primary" href="{{ route('categories') }}">Back</a>
            </div>

        </form>



    </div>
@endsection
