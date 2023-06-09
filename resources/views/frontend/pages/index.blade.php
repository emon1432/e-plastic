@extends('frontend.layouts.master')
@section('content')
    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid my-5" src="{{ asset('frontend') }}/img/banner/banner-2.jpg" alt=""
                                height="800" width="500">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>E</b> Plastic</h1>
                                <h3 class="h2">Eplastic is a recycled type website</h3>
                                <p>
                                    Where user can buy or sell used or wasted plustic products. In this website user can
                                    also find the nearest recycling center.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid my-5" src="{{ asset('frontend') }}/img/banner/banner-3.jpg" alt=""
                                height="800" width="500">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>E</b> Plastic</h1>
                                <h3 class="h2">Eplastic is a recycled type website</h3>
                                <p>
                                    Where user can buy or sell used or wasted plustic products. In this website user can
                                    also find the nearest recycling center.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid my-5" src="{{ asset('frontend') }}/img/banner/banner-4.jpg" alt=""
                                height="800" width="500">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>E</b> Plastic</h1>
                                <h3 class="h2">Eplastic is a recycled type website</h3>
                                <p>
                                    Where user can buy or sell used or wasted plustic products. In this website user can
                                    also find the nearest recycling center.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel"
            role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->



    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        This is our newest products. You can see all of our products in our <a
                            href="{{ route('products') }}">Product
                            Page</a>.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-12 col-md-3 mb-4">
                        <div class="card h-100">
                            <a href="{{ route('product.details', $product->id) }}">
                                <img src="{{ asset('backend/images/products/' . $product->image1) }}" class="card-img-top"
                                    alt="..." height="250" width="20">
                            </a>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('product.details', $product->id) }}"
                                        class="text-decoration-none text-dark">
                                        <h5 class="text-secondary">{{ Str::limit($product->product_name, 15) }}</h5>
                                    </a>
                                    <h5 class="text-right text-danger">{{ $product->selling_price }}(Taka)</h5>
                                </div>
                                <div class="text-decoration-none">
                                    <h5 class="text-success">
                                        Category : <span class="h6 text-secondary">{{ $product->categoryInfo->name }}</span>
                                    </h5>
                                </div>
                                {{-- details button center --}}
                                <div class="d-flex justify-content-center mt-3 mb-3">
                                    @if ($product->sale_status == 'available')
                                        <div class="mx-3">
                                            <a href="{{ route('product.details', $product->id) }}"
                                                class="btn btn-success text-decoration-none">Details</a>
                                        </div>

                                        <div class="mx-3">
                                            
                                            <form action="{{ route('checkout') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="product_name"
                                                    value="{{ $product->product_name }}">
                                                <input type="hidden" name="product_price"
                                                    value="{{ $product->selling_price }}">
                                                <input type="hidden" name="product_quantity" value="1">
                                                @if ($product->sale_status != 'sold')
                                                    <input type="submit" class="btn btn-success text-uppercase" value="Buy Now">
                                                        
                                                @else
                                                    <div class="mx-3">
                                                        <h3 class="text-danger">Sold Out</h3>
                                                    </div>
                                                @endif
                                            </form>
                                        </div>
                                    @endif
                                    @if ($product->sale_status == 'sold')
                                        <div class="mx-3">
                                            <h3 class="text-danger">Sold Out</h3>
                                        </div>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-end">
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
