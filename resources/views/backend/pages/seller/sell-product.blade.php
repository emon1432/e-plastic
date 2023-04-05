@php
    use App\Models\ProductCategory;
    $productCategories = ProductCategory::get();
@endphp

<div id="sell-request-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl p-2">
        <div class="modal-content p-8">
            <div class="intro-y text-primary text-2xl font-bold text-left pt-4 pb-2 mb-2 border-b-2 ">
                Sell Request
            </div>
            <form class="text-lg" action="{{ route('sell-request.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-12 gap-2 mt-3">
                    <div class="col-span-6">
                        <label class="flex flex-col sm:flex-row">Select Category</label>
                        <select name="category" class="flex flex-col sm:flex-row category w-full">
                            <option value="">Select Category</option>
                            @foreach ($productCategories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6">
                        <label class="flex flex-col sm:flex-row">Enter Weight</label>
                        <input class="weight w-full" type="text" name="weight" placeholder="Weight In KG" required>
                    </div>
                    <div class="col-span-6">
                        <label class="flex flex-col sm:flex-row">Product Price</label>
                        <input class="price w-full" type="text" name="price" value="" readonly>
                    </div>
                    <div class="col-span-6">
                        <label class="flex flex-col sm:flex-row">Total Price</label>
                        <input class="finalPrice w-full" type="text" name="totalPrice" placeholder="Price In Taka" readonly>
                    </div>
                    <div class="col-span-12">
                        <label class="flex flex-col sm:flex-row">Enter Pickup Address</label>
                        <textarea name="address" class="w-full" cols="15" rows="4"></textarea>
                    </div>
                    <div class="col-span-6">
                        <label class="flex flex-col sm:flex-row">Image</label>
                        <input type="file" name="image" class="input w-full border mt-2" placeholder="Image"
                            required>
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
