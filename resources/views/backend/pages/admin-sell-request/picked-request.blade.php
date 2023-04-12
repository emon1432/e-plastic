@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Picked Request List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>ADDRESS</th>
                            <th>TYPE</th>
                            <th>WEIGHT</th>
                            <th>PRICE</th>
                            <th>IMAGE</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pickedRequests as $pickedRequest)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td>{{ $pickedRequest->sellRequestInfo->name }}</td>
                                <td>{{ $pickedRequest->sellRequestInfo->phone }}</td>
                                <td>{{ $pickedRequest->sellRequestInfo->address }}</td>
                                <td>{{ $pickedRequest->sellRequestInfo->product_category_id }}</td>
                                <td>{{ $pickedRequest->sellRequestInfo->product_weight }}</td>
                                <td>{{ $pickedRequest->sellRequestInfo->total_price }}</td>
                                <td class="flex items-center justify-center">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="{{ $pickedRequest->sellRequestInfo->name }}" class="rounded-full"
                                            src="{{ asset('backend/images/sell-request') }}/{{ $pickedRequest->sellRequestInfo->image ?? 'avatar.png' }}">
                                    </div>
                                </td>
                                @if ($pickedRequest->status == 'picked')
                                    <td>
                                        <span class="text-success">Picked</span>
                                    </td>
                                    <td>
                                        <button class="flex items-center mr-3 btn btn-primary" data-tw-toggle="modal"
                                            data-tw-target="#post-product-modal-{{ $pickedRequest->id }}">
                                            Post Product
                                        </button>
                                    </td>
                                @endif

                                <div id="post-product-modal-{{ $pickedRequest->id }}" class="modal" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl p-2">
                                        <div class="modal-content p-8">
                                            <div
                                                class="intro-y text-primary text-2xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
                                                Sell Request
                                            </div>
                                            <form class="text-lg" action="" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="grid grid-cols-12 gap-2 mt-3">
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Select Category</label>
                                                        <select name="category"
                                                            class="flex flex-col sm:flex-row category w-full">
                                                            <option value="">Select Category</option>
                                                            @foreach ($productCategories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Enter Weight(KG)</label>
                                                        <input class="weight w-full" type="text" name="weight"
                                                            placeholder="Weight In KG" required>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Product Price(Taka)</label>
                                                        <input class="price w-full" type="text" name="price" readonly>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Total Price</label>
                                                        <input class="finalPrice w-full" type="text" name="totalPrice"
                                                            placeholder="Price In Taka" readonly>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Enter Percentage(%)</label>
                                                        <input class="percentage w-full" type="text" name="price"
                                                            value="">
                                                    </div>
                                                    <div class="col-span-12">
                                                        <label class="flex flex-col sm:flex-row">Enter Pickup
                                                            Address</label>
                                                        <textarea name="address" class="w-full" cols="15" rows="4"></textarea>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Image</label>
                                                        <input type="file" name="image"
                                                            class="input w-full border mt-2" placeholder="Image" required>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row-reverse mt-2">
                                                    <button type="submit" class="btn btn-primary w-full shadow-md mr-2 ">
                                                        Sell Request
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        // take percentage and calculate total price
        $(document).ready(function() {
            $('.percentage').keyup(function() {
                var percentage = $(this).val();
                var price = $('.finalPrice').val();
                var total = (percentage / 100) * price;
                var finalPrice = 0;
                //add percentage price with total price
                finalPrice = parseInt(price) + parseInt(total);
                $('.finalPrice').val(finalPrice);
            });
        });
    </script>
@endpush
