@extends('admin.layout')
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        border-radius: 5px;
        overflow: hidden;
        margin: 10px auto;
        width: 600px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 #e91e63;
    }

    .card-image {
        transition: .5s ease-in-out;
    }

    .card:hover .card-image {
        transform: translateY(-4px);
    }

    .card-image {
        width: 100%;
        height: "30";
        object-fit: cover;
    }

    .card-content {
        padding: 20px;
    }

    .card-title {
        margin: 0;
        font-size: 24px;
        font-weight: bold;
    }

    .card-text {
        margin: 10px 0;
        font-size: 14px;
        color: gray;
    }
</style>
@section('content')
    <div class="card">
        <img src="{{ URL::asset($product->image) }}" alt="Card image" class="card-image">
        <div class="card-content">
            <h3 class="card-title">{{ $product->title }}</h3>
            <p class="card-text">{{ $product->small_desc }}</p>
            <input type="checkbox" {{ $product->status ? 'checked' : '' }} @disabled(true)>
            <label class="card-text">Status</label>
            <br>
            <input type="checkbox" {{ $product->trending ? 'checked' : '' }} @disabled(true)>
            <label class="card-text">Trending</label>
            <p class="card-text">{{ $product->meta_title }}</p>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text">{{ $product->meta_keywords }}</p>
            <p class="btn btn-primary">Old Price : {{ $product->price }}$</p><br>
            <p class="btn btn-primary">New Price : {{ $product->sell_price }}$</p>
            {{-- <a href="#" class="btn btn-primary ">Pizza Now </a> --}}
        </div>
    </div>
@endsection
