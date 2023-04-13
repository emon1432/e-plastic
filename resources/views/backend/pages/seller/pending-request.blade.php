@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Pending Request List</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button data-tw-toggle="modal" data-tw-target="#create-seller-modal" class="btn btn-primary shadow-md mr-2"
                type="button">Add New Seller</button>
        </div> --}}
        <div id="listContainer" class="intro-y col-span-12 ">
            <div class="intro-y col-span-12 ">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr class="text-center">
                            <th>NAME</th>
                            <th>PHONE</th>
                            <th>PICKUP ADDRESS</th>
                            <th>TYPE</th>
                            <th>WEIGHT</th>
                            <th>PRICE</th>
                            <th>IMAGES</th>
                            <th>STATUS</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendingRequests as $pendingRequest)
                            @if (auth()->user()->id == $pendingRequest->sellerInfo->user_id)
                                <tr class="intro-x text-center font-medium whitespace-nowrap">
                                    <td>{{ $pendingRequest->sellerInfo->name }}</td>
                                    <td>{{ $pendingRequest->sellerInfo->phone }}</td>
                                    <td>{{ $pendingRequest->address }}</td>
                                    <td>{{ $pendingRequest->categoryInfo->name }}</td>
                                    <td>{{ $pendingRequest->product_weight }}</td>
                                    <td>{{ $pendingRequest->total_price }}</td>
                                    <td class="flex items-center justify-center">
                                        <div class="w-10 h-10 image-fit zoom-in">
                                            <img alt="{{ $pendingRequest->name }}" class="rounded-full"
                                                src="{{ asset('backend/images/sell-request') }}/{{ $pendingRequest->image ?? 'avatar.png' }}">
                                        </div>
                                    </td>
                                    <td class="text-warning">pending</td>
                                    <td class="table-report__action w-56">
                                        <div class="flex  items-center">
                                            <button class="flex items-center mr-3" data-tw-toggle="modal"
                                                data-tw-target="#edit-seller-modal-{{ $pendingRequest->id }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                            </button>
                                            {{-- @if ($pendinger->id != auth()->user()->id)
                                            <button class="flex items-center text-danger" data-tw-toggle="modal"
                                                data-tw-target="#delete-seller-modal-{{ $pendinger->id }}">
                                                <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                            </button>
                                        @endif --}}
                                        </div>
                                    </td>
                                </tr>
                                <!-- Edit seller Modal -->
                                <div id="edit-seller-modal-{{ $pendingRequest->id }}" class="modal" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-xl p-2">
                                        <div class="modal-content p-8">
                                            <div
                                                class="intro-y text-primary text-2xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
                                                Edit seller
                                            </div>
                                            <form class="text-lg"
                                                action="{{ url('sell-request/update/' . $pendingRequest->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="grid grid-cols-12 gap-2 mt-3">
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Select Category</label>
                                                        <select name="category"
                                                            class="flex flex-col sm:flex-row category w-full">
                                                            <option value="">Select Category</option>
                                                            @foreach ($productCategories as $category)
                                                                <option value="{{ $category->id }}"
                                                                    @if ($category->id == $pendingRequest->product_category_id) selected @endif>
                                                                    {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Enter Weight</label>
                                                        <input class="weight w-full" type="text" name="weight"
                                                            placeholder="Weight In KG"
                                                            value="{{ $pendingRequest->product_weight }}" required>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Product Price</label>
                                                        <input class="price w-full" type="text" name="price"
                                                            value="" readonly>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Total Price</label>
                                                        <input class="finalPrice w-full" type="text" name="totalPrice"
                                                            placeholder="Price In Taka"
                                                            value="{{ $pendingRequest->total_price }}" readonly>
                                                    </div>
                                                    <div class="col-span-12">
                                                        <label class="flex flex-col sm:flex-row">Enter Pickup
                                                            Address</label>
                                                        <textarea name="address" class="w-full" cols="15" rows="4">{{ $pendingRequest->address }}</textarea>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Image</label>
                                                        <input type="file" name="image"
                                                            class="input w-full border mt-2" placeholder="Image" required>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row-reverse mt-2">
                                                    <button type="submit" class="btn btn-primary w-full shadow-md mr-2 ">
                                                        Update Sell Request
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        //on change category put value in product price input
        $('.category').on('change', function() {
            var category = $(this).val();

            $.ajax({
                url: "{{ url('sell-request/price') }}/" + category,
                type: "GET",
                data: {
                    category: category,
                },
                //show price in input
                success: function(data) {
                    $('.price').val(data.price);
                }
            });
        });

        //on change weight put value in final price input real time
        $('.weight').on('keyup', function() {
            var weight = $(this).val();
            var price = $('.price').val();
            var finalPrice = weight * price;
            $('.finalPrice').val(finalPrice);
        });
    </script>
@endpush
