@extends('admin.layout')

@section('content')
    <div class="container">
        <div style="margin: 20px">
            <h4>EDIT PRODUCT</h4>
        </div>
        <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="margin: 20px">
                <label class="form-label">Product Title</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="title" value="{{ $product->title }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Product Small Description</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="small_desc" value="{{ $product->small_desc }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Product Description</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="description" value="{{ $product->description }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Category</label>
                <div class="input-group input-group-outline">

                    <select class="form-select" aria-label="Default select example" name="cate_id">
                        <option selected value="{{ $product->cate_id }}" style="color: #344767">
                            {{ $product->pro_to_cat->title }} </option>
                        @foreach ($Categories as $item)
                            <option value="{{ $item->id }}" style="color: #344767">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Price</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label"> Sell Price</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="sell_price" value="{{ $product->sell_price }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Meta Title</label>
                <div class="input-group input-group-outline">
                    <input type="text" class="form-control" name="meta_title" value="{{ $product->meta_title }}">
                </div>
            </div>

            <div style="margin: 20px">
                <label class="form-label">Meta Description</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="meta_desc" value="{{ $product->meta_desc }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Meta keywords</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="meta_keywords" value="{{ $product->meta_keywords }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Quantity</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="qty" value="{{ $product->qty }}">
                </div>
            </div>
            <div style="margin: 20px">
                <label class="form-label">Tax</label>
                <div class="input-group input-group-outline">

                    <input type="text" class="form-control" name="tax" value="{{ $product->tax }}">
                </div>
            </div>
            <div style="margin: 20px">
                <div class="">
                    <input type="checkbox" name="status" {{ $product->status ? 'checked' : '' }}>
                    <label class="form-label">status</label>
                </div>
            </div>
            <div style="margin: 20px">
                <div class="">
                    <input type="checkbox" name="trending" {{ $product->trending ? 'checked' : '' }}>
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
