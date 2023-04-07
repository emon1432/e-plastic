@extends('backend.layouts.master')
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Rejected Request List</h2>
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
                            <th>IMAGES</th>
                            <th>STATUS</th>
                            <th>Reject Reason</th> 
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rejectedRequests as $rejectedRequest)
                            <tr class="intro-x text-center font-medium whitespace-nowrap">
                                <td>{{ $rejectedRequest->name }}</td>
                                <td>{{ $rejectedRequest->phone }}</td>
                                <td>{{ $rejectedRequest->address }}</td>
                                <td>{{ $rejectedRequest->product_category_id }}</td>
                                <td>{{ $rejectedRequest->product_weight }}</td>
                                <td>{{ $rejectedRequest->total_price }}</td>
                                <td class="flex items-center justify-center">
                                    <div class="w-10 h-10 image-fit zoom-in">
                                        <img alt="{{ $rejectedRequest->name }}" class="rounded-full"
                                            src="{{ asset('backend/images/sell-request') }}/{{ $rejectedRequest->image ?? 'avatar.png' }}">
                                    </div>
                                </td>
                                <td class="text-danger">rejected</td>
                                <td>{{ Str::limit($rejectedRequest->reject_reason,20) }}</td>
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
