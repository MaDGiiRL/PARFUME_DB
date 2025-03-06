<x-layout title="{{ $parfum['name'] }}">
    <style>
        .container-detail {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            margin-top: 150px;
            border-radius: 10px;
        }

        .detail-img {
            width: 100%;
            border-radius: 10px;
        }

        .sale-badge {
            background: #ff6b6b;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
        }

        .btn-add {
            background: #a0a04a;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            border: none;
            width: 100%;
        }

        .accordion-button-detail {
            background: white;
            border: none;
            box-shadow: none;
        }
    </style>
    <div class="container-detail">
        <div class="row my-5 pty-5">
            <div class="col-md-6">
                <img src="{{ asset($parfum['image']) }}" class="detail-img" alt="Meadow Parfum">
            </div>
            <div class="col-md-6">
                <h1>Meadow</h1>
                <p><strong>{{ $parfum['scent'] }}</strong> - ${{ $parfum['price'] }}</p>
                <p>{{ $parfum['details'] }}</p>
                <div class="my-3">

                    <label for="qty">QTY</label>
                    <input type="number" id="qty" class="form-control w-25" value="1" min="1">
                </div>
                <button class="btn-custom w-100">ADD TO CART</button>

                <div class="accordion mt-4" id="accordionExample">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button-detail" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                SCENT NOTES
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Wildflowers, Fresh Breeze, Citrus
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button-detail" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                INGREDIENTS
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Alcohol, Essential Oils, Natural Extracts
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('shop') }}" class="btn btn-custom mt-5">Back to Shop</a>
            </div>
        </div>
    </div>

    <x-mastery />
    <x-featured />
    <x-review />

</x-layout>