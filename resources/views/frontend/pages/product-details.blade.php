@extends('frontend.layouts.master')
@push('css')
    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/slick-theme.css">
@endpush
@section('content')
    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid"
                            src="{{ asset('backend/images/products/' . $productDetails->image1) }}" alt="Card image cap"
                            id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item"
                            data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="{{ asset('backend/images/products/' . $productDetails->image1) }}"
                                                    alt="Product Image 1">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="{{ asset('backend/images/products/' . $productDetails->image1) }}"
                                                    alt="Product Image 2">
                                            </a>
                                        </div>
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid"
                                                    src="{{ asset('backend/images/products/' . $productDetails->image1) }}"
                                                    alt="Product Image 3">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $productDetails->product_name }}</h1>
                            <p class="h3 py-2">$25.00</p>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h5>Category:</h5>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $productDetails->categoryInfo->name }}</strong></p>
                                </li>
                            </ul>

                            <h5>Description:</h5>
                            <p>{{ Str::limit($productDetails->product_description, 200) }}</p>

                            <div class="row">
                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right">
                                            Quantity:{{ $productDetails->product_weight }}(KG)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-auto">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Total Price :</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p><strong>{{ $productDetails->selling_price }}(taka)</strong></p>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <form action="{{ route('checkout') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
                                        <input type="hidden" name="product_name"
                                            value="{{ $productDetails->product_name }}">
                                        <input type="hidden" name="product_price"
                                            value="{{ $productDetails->selling_price }}">
                                        <input type="hidden" name="product_quantity" value="1">
                                        <button type="submit" class="btn btn-success btn-lg">Buy Now</button>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
@endsection
@push('js')
    <!-- Start Slider Script -->
    <script src="{{ asset('frontend') }}/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->
@endpush
