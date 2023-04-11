@extends('frontend.layouts.master')
@section('content')
    <section class="ftco-section services-section">
        <div class="container">

            <div class="py-5 text-center">

                <h2>Checkout</h2>
                <p class="lead">
                    Below is the form for you to fill in your details and place your order.
                </p>
            </div>

            <form action="" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Your Order</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Pickup Location</h6>
                                </div>
                                <span class="text-muted">fgh</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Dropoff Location</h6>
                                </div>
                                <span class="text-muted">fdgd</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Pickup Date</h6>
                                </div>
                                <span class="text-muted">fgfdg</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Dropoff Date</h6>
                                </div>
                                <span class="text-muted">fdgd</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <div>
                                    <h6 class="my-0">Total (USD)</h6>
                                </div>
                                <strong>$10</strong>
                                <input type="hidden" name="amount" value="10">
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Shipping Address</h4>


                        <div class="mb-3">
                            <label for="address">Address<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="address"
                                placeholder="House number and street name" name="address" value="{{ old('address') }}"
                                required>
                            <div class="invalid-feedback">
                                Please enter your address.
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="city">City<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="city" placeholder="Enter your city"
                                    name="city" value="{{ old('city') }}" required>
                                <div class="invalid-feedback">
                                    Please enter your city.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="zip">Zip<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="zip" name="zip_code" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone">Phone<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter your phone"
                                name="phone" value="" required>
                            <div class="invalid-feedback">
                                Please enter your phone.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                name="email" value="{{ old('email') }}" required>
                            <div class="invalid-feedback">
                                Please enter your email.
                            </div>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block mb-3" type="submit">Place Order</button>


                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
