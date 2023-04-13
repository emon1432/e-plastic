@extends('frontend.layouts.master')
@push('css')
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="py-5 text-center">
            <h2>Checkout</h2>

            <p class="lead">
                Give your shipping information and make payment. Your order will be delivered within 3-5 days.
                Your information will be kept confidential.
            </p>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                        </div>
                        <span>{{ $product->product_name }}</span>
                        <input type="hidden" name="product_id" value="{{ $product->id }}" id="product_id" />
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product Category</h6>
                        </div>
                        <span>{{ $product->categoryInfo->name }}</span>
                        <input type="hidden" name="category_id" value="{{ $product->categoryInfo->id }}" id="category_id" />
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product Weight</h6>
                        </div>
                        <span>{{ $product->product_weight }}</span>
                        <input type="hidden" name="product_weight" value="{{ $product->product_weight }}" id="product_weight" />
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (BDT)</span>
                        <strong>{{ $product->selling_price }}</strong>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Full name</label>
                        <input type="text" name="buyer_name" class="form-control" id="buyer_name"
                            placeholder="Enter your full name" value="{{ Auth::user()->name }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="mobile">Mobile</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        <input type="text" name="buyer_mobile" class="form-control" id="mobile"
                            placeholder="Enter your mobile number" value="{{ Auth::user()->phone }}" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" name="buyer_email" class="form-control" id="email"
                        placeholder="you@example.com" value="{{ Auth::user()->email }}">
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter your address"
                        value="{{ Auth::user()->address }}" required>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required>
                            <option value="">Choose...</option>
                            <option value="Bangladesh">Bangladesh</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required>
                            <option value="">Choose...</option>
                            <option value="Dhaka">Dhaka</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <input type="hidden" value="{{ $product->selling_price }}" name="amount" id="total_amount" required />
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my
                        billing
                        address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next
                        time</label>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn" token="if you have any token validation"
                    postdata="your javascript arrays or objects which requires in backend"
                    order="If you already have the transaction generated for current order"
                    endpoint="{{ url('/pay-via-ajax') }}"> Pay Now
                </button>
            </div>
        </div>
    </div>
    <br>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- If you want to use the popup integration, -->
    <script>
        var obj = {};
        obj.cus_name = $('#buyer_name').val();
        obj.cus_phone = $('#mobile').val();
        obj.cus_email = $('#email').val();
        obj.cus_addr1 = $('#address').val();
        obj.amount = $('#total_amount').val();
        obj.product_id = $('#product_id').val();
        obj.category_id = $('#category_id').val();
        obj.product_weight = $('#product_weight').val();

        $('#sslczPayBtn').prop('postdata', obj);

        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7); // USE THIS FOR SANDBOX
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@endpush
