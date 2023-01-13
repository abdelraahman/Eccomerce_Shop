<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <style>
        main {
            padding-top: 50px;
        }

        @media (min-width: 768px) {
            .product-card-details {
                max-height: 640px;
            }
        }

        /* .product-card-details {
            border-radius: 8px;
            box-shadow: 0 7px 25px -10px rgba(0, 0, 0, 0.33);
        } */

        .product-card-details-img {
            width: 100%;
            max-height: 620px;
            object-fit: cover;
        }

        .product-card-details-content {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>
<main>


    <div class="product-card-details-container-outer">
        <div class="container">
            <div class="product-card-details-container pro_data">
                <form action="{{ route('cart') }}" method="POST">
                    @csrf
                    <div class="product-card-details row">

                        <div class="col-md-5 p-1">
                            <img class="product-card-details-img" src="{{ asset($product->image) }}" />
                        </div>
                        <div class="col-md-7 p-1">

                            <div class="product-card-details-content">
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item">
                                        <h2 class="product-card-details-product-name">{{ $product->title }}</h2>
                                    </li>

                                    <li class="list-group-item">
                                        <h6>Product Breif Description:</h6>
                                        <h6 class="product-card-details-product-desc">{{ $product->small_desc }}
                                        </h6>

                                    </li>
                                    <li class="list-group-item">
                                        <h6>Product Description:</h6>
                                        <h6 class="product-card-details-product-desc">{{ $product->description }}
                                        </h6>

                                    </li>
                                    <li class="list-group-item">
                                        <p class="btn btn-dark " style="background-color: #e91e63"><del
                                                style="color: black">Old Price
                                                :{{ $product->price }}
                                            </del> </P>
                                        <p class="btn btn-dark increment-btn" style="background-color: #e91e63">New
                                            Price : {{ $product->sell_price }}</P>
                                    </li>
                                    <li class="list-group-item">
                                        @if ($product->status == '1')
                                            <span class="badge bg-black" style="background-color:red;color:white">Out Of
                                                Stock</span>
                                        @else
                                            <span class="badge bg-black" style="background-color:green;color:white">In
                                                Stock</span>
                                        @endif

                                    </li>
                                    @if ($product->status == '0')
                                        <li class="list-group-item">

                                            <h6> Quantity: </h6>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button"
                                                    class="btn btn-dark decrement-btn"style="background-color: #e91e63"
                                                    id="decrement">-</button>
                                                <input type="text" class="form-control qty" value="1"
                                                    style="width: 2.4rem;" name="qty">
                                                <button type="button" class="btn btn-dark increment-btn"
                                                    style="background-color: #e91e63">+</button>
                                            </div>

                                        </li>
                                    @endif
                                    <input type="hidden" value="{{ $product->id }}" class="proid" name="prod_id">
                                    <li class="list-group-item">
                                        {{-- <a href=""
                                        class="btn btn-dark addtocart"style="background-color: #e91e63">Add To
                                        Cart</a> --}}

                                        @if ($product->status == '0')
                                            <button class="btn btn-dark" type="submit"
                                                style="background-color: #e91e63">Add To
                                                Cart</button>
                                        @endif

                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

</main>
<script language='javascript' type='text/javascript'>
    $(document).ready(function() {

        $(".increment-btn").click(function(e) {
            e.preventDefault();
            var inc_value = $('.qty').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            $('.qty').val(value);

        });

        $(".decrement-btn").click(function(e) {
            e.preventDefault();
            var inc_value = $('.qty').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            value--;
            $('.qty').val(value);

        });


    });
</script>


</html>
