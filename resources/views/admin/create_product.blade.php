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
            <h4>ADD PRODUCT</h4>
        </div>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin: 20px">
                <label class="form-label">Product Title</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Product Small Description</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="small_desc">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Product Description</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="description">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Category</label>
                <div class="input-group input-group-outline">
                    <select class="form-select" aria-label="Default select example" name="cate_id">
                        @foreach ($Categories as $item)
                            <option value="{{ $item->id }}" style="color: #344767">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Price</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="price">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label"> Sell Price</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="sell_price">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Meta Title</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="meta_title">
                </div>
            </div>

            <div style="margin: 20px">
                <label class="form-label">Meta Description</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="meta_desc">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Meta keywords</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="meta_keywords">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Quantity</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="qty">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Tax</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="tax">
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
                    <input type="checkbox" name="trending">
                    <label class="form-label">Trending</label>
                </div>
            </div>
            <label for="exampleFormControlTextarea1">Product image</label>
            <div style="margin: 20px">

                <input type="file" name="image">
                {{-- <textarea class="form-control" name="photo" rows="3"></textarea> --}}
            </div>
            <div style="margin: 20px">
                <button type="submit" class="btn btn-primary">SAVE</button>
                <a class="btn btn-primary" href="{{ route('products') }}">Back</a>
            </div>

        </form>


    </div>
@endsection
