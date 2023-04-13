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
                                @if ($pickedRequest->status == 'posted')
                                    <td>
                                        <span class="text-primary">Posted</span>
                                    </td>
                                    <td>
                                        <span class="text-primary">Posted</span>
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
                                            <form class="text-lg" action="{{ route('product.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="grid grid-cols-12 gap-2 mt-3">
                                                    <input type="hidden" name="id" value="{{ $pickedRequest->id }}">
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Product Name</label>
                                                        <input class="w-full" type="text" name="product_name"
                                                            placeholder="Product Name"
                                                            value="{{ $pickedRequest->sellRequestInfo->product_name }}"
                                                            required>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Select Category</label>
                                                        <select name="product_category_id"
                                                            class="flex flex-col sm:flex-row category w-full">
                                                            <option value="">Select Category</option>
                                                            @foreach ($productCategories as $category)
                                                                <option value="{{ $category->id }}"
                                                                    @if ($category->id == $pickedRequest->sellRequestInfo->product_category_id) selected @endif>
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Enter Weight(KG)</label>
                                                        <input class="w-full" type="text" name="product_weight"
                                                            placeholder="Weight In KG"
                                                            value="{{ $pickedRequest->sellRequestInfo->product_weight }}"
                                                            required>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Product Price(Taka)</label>
                                                        <input class="price w-full" type="text" name="product_price"
                                                            value="{{ $pickedRequest->sellRequestInfo->product_price }}"
                                                            readonly>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Buying Price</label>
                                                        <input class="w-full" type="text" name="buying_price"
                                                            placeholder="Price In Taka"
                                                            value="{{ $pickedRequest->sellRequestInfo->total_price }}"
                                                            readonly>
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label class="flex flex-col sm:flex-row">Selling Price</label>
                                                        <input class="w-full" type="text" name="selling_price"
                                                            placeholder="Enter Selling Price">
                                                    </div>
                                                    <div class="col-span-12">
                                                        <label class="flex flex-col sm:flex-row">Enter Product Description</label>
                                                        <textarea name="product_description" class="w-full" cols="15" rows="3" placeholder="Enter Product Description"></textarea>
                                                    </div>

                                                    <div class="col-span-4">
                                                        <label class="flex flex-col sm:flex-row">Image1</label>
                                                        <input type="file" name="image1"
                                                            class="input w-full border mt-2" placeholder="Image" required>
                                                    </div>

                                                    <div class="col-span-4">
                                                        <label class="flex flex-col sm:flex-row">Image2</label>
                                                        <input type="file" name="image2"
                                                            class="input w-full border mt-2" placeholder="Image" required>
                                                    </div>
                                                    <div class="col-span-4">
                                                        <label class="flex flex-col sm:flex-row">Image3</label>
                                                        <input type="file" name="image3"
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
