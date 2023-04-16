@extends('frontend.layouts.master')
@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">All Products</h1>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0"
                                        src="{{ asset('backend') }}/images/products/{{ $product->image1 }}"
                                        alt="{{ $product->product_name }}" height="270" width="300">
                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">

                                            <li>
                                                <a class="btn btn-success text-white mt-2"
                                                    href="{{ route('product.details', $product->id) }}">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('product.details', $product->id) }}"
                                        class="h3 text-decoration-none">{{ $product->product_name }}</a>
                                    <br>
                                    <small>Category: {{ $product->categoryInfo->name }}</small>
                                    <p class="mb-0">Price: {{ $product->selling_price }}(Taka)</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="d-flex justify-content-end">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->
@endsection
